<?php

namespace App\Http\Controllers;

use Exception;
use App\models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    protected $model;

    public function __construct(Usuario $model) {
            $this->model = $model;
    }

    public function login(Request $request)
    {
        $user = $request['username'];
        $pass = md5($request['password']);

        $logar = $this->model->where('EMAIL', $user)->where('SENHA',$pass)->first();
        if($logar !== null) {
            $request->session()->put('loggedIn', $user);
            return view('home.home');
        } else {
            return view('usuario.login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('users.get.login');
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
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {   
        try{
        $input = $request->all();
        $user = $this->model->create(['EMAIL'=>$input['username'],'SENHA'=>md5($input['password'])]);
        return redirect()->route('home');
        } catch(Exception $e) {
            echo $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('usuario.show');
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
