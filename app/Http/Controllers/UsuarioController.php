<?php

namespace App\Http\Controllers;

use App\models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    protected $model;

    public function __construct(Usuario $model) {
            $this->model = $model;
    }

    public function login(Request $request)
    {
        $logar = $this->model->where('EMAIL', $request['username'])->where('SENHA',$request['password'])->first();
        if($logar !== null) {
            return view('usuario.create');
        } else {
            return view('usuario.login');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('usuario.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:120',
            'senha'=> 'required|min:6'
        ]);

        $user = User::create($request->only('email', 'senha'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
