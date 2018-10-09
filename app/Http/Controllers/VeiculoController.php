<?php

namespace App\Http\Controllers;

use App\models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    protected $model;

    public function __construct(Veiculo $model) {
            $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $veiculos = $this->model->get();
        return view('veiculo.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('veiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $veiculo = $this->model->fill([
            'MARCA' => $input['marca'],
            'NOME_VEI' => $input['nome'],
            'PLACA' => $input['placa'],
            'MODELO' => $input['modelo'],
            'TIPO' => $input['tipo'],
            'VALOR' => $input['valor']
        ]);

        $veiculo->save();

        return redirect()->route('veiculos.index');
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
        $veiculo = $this->model->find($id);

        return view('veiculo.edit', compact('veiculo'));
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
            'MARCA' => $input['marca'],
            'NOME_VEI' => $input['nome'],
            'PLACA' => $input['placa'],
            'MODELO' => $input['modelo'],
            'TIPO' => $input['tipo'],
            'VALOR' => $input['valor']
        ]);

        return redirect()->route('veiculos.index');
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

        return redirect()->route('veiculos.index');
    }
}
