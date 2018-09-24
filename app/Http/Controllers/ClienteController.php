<?php

namespace App\Http\Controllers;

use App\models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    protected $model;

    public function __construct(Cliente $model) {
            $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clientes = $this->model->get();
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $cliente = $this->model->fill([
            'NOME_CLI'=>$input['nome'],
            'SEXO'=>$input['sexo'],
            'TELEFONE'=>$input['telefone']
        ]);

        $cliente->save();
        
        return redirect()->route('clients.index');
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
        $cliente = $this->model->find($id);
        
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $this->model->find($id)->update([
            'NOME_CLI' => $input['nome'],
            'SEXO' => $input['sexo'],
            'TELEFONE' => $input['telefone']
        ]);

        return redirect()->route('clients.index');
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

        return redirect()->route('clients.index');
    }
}
