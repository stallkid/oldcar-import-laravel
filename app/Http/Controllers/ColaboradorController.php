<?php

namespace App\Http\Controllers;

use App\models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{

    protected $model;

    public function __construct(Colaborador $model) {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $colaboradores = $this->model->get();
        return view('colaborador.index', compact('colaboradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('colaborador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        $colaborador = $this->model->fill([
            'NOME_COLAB' => $input['nome'],
            'SETOR' => $input['setor'],
            'SEXO' => $input['sexo'],
            'TELEFONE' => $input['telefone']
        ]);
        
        $colaborador->save();
        
        return redirect()->route('colaboradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $colaborador = $this->model->find($id);

        return view('colaborador.edit', compact('colaborador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $input = $request->all();

        $this->model->find($id)->update([
            'NOME_COLAB' => $input['nome'],
            'SETOR' => $input['setor'],
            'SEXO' => $input['sexo'],
            'TELEFONE' => $input['telefone']
        ]);

        return redirect()->route('colaboradores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->model->find($id)->delete();

        return redirect()->route('colaboradores.index');
    }
}
