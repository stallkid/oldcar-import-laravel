<?php

namespace App\Http\Controllers;

use App\models\Venda;
use App\models\Cliente;
use App\models\Veiculo;
use App\models\Colaborador;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class VendaController extends Controller
{
    protected $model;
    protected $cliente;
    protected $colaborador;
    protected $veiculo;

    public function __construct(Venda $model, Cliente $cliente, Colaborador $colaborador, Veiculo $veiculo) {
        $this->model = $model;
        $this->cliente = $cliente;
        $this->colaborador = $colaborador;
        $this->veiculo = $veiculo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $vendas = $this->model->with('cliente', 'colaborador', 'veiculo')->get();
        
        return view('venda.index', compact('vendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $clientes = $this->cliente->pluck('NOME_CLI', 'IDCLIENTE');
        $colaboradores = $this->colaborador->pluck('NOME_COLAB', 'IDCOLABORADOR');
        $veiculos = $this->veiculo->pluck('NOME_VEI', 'IDVEICULO');

        return view('venda.create', compact('clientes', 'colaboradores', 'veiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $venda = $this->model->fill([
            'FK_IDCOLABORADOR' => $input['colaborador'],
            'FK_IDCLIENTE' => $input['cliente'],
            'FK_IDVEICULO' => $input['veiculo'],
            'TIPO_VENDA' => $input['tipoVenda']
        ]);

        $venda->save();

        return redirect()->route('vendas.index');
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
        $clientes = $this->cliente->pluck('NOME_CLI', 'IDCLIENTE');
        $colaboradores = $this->colaborador->pluck('NOME_COLAB', 'IDCOLABORADOR');
        $veiculos = $this->veiculo->pluck('NOME_VEI', 'IDVEICULO');
        $venda = $this->model->find($id);

        return view('venda.edit', compact('venda','clientes','colaboradores','veiculos'));
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
            'FK_IDCOLABORADOR' => $input['colaborador'],
            'FK_IDCLIENTE' => $input['cliente'],
            'FK_IDVEICULO' => $input['veiculo'],
            'TIPO_VENDA' => $input['tipoVenda']
        ]);

        return redirect()->route('vendas.index');
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

        return redirect()->route('vendas.index');
    }
}
