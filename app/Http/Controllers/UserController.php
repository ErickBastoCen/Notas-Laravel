<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', ['usuarios' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            
            'nombre' =>'required|max:255',
            'email' =>'nullable|email',
            'contraseña' =>'required|min:6',
            'contraseña_2'=>'required|min:6',
            
        ]);
        $usuario = new User();
        $usuario->name = $request->input('nombre');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('contraseña');
        $usuario->remember_token = $request->input('contraseña_2');
        $usuario->save();
        $users = User::all();
        return view('user.index', ['usuarios' => $users]);


    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('user.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            
            'nombre' =>'required|max:255',
            'email' =>'nullable|email',
            'contraseña' =>'required|min:6',
            'contraseña_2'=>'required|min:6',
            
        ]);
        $usuario = User::find($id);
        $usuario->name = $request->input('nombre');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('contraseña');
        $usuario->remember_token = $request->input('contraseña_2');
        $usuario->save();
        $users = User::all();
        return view('user.index', ['usuarios' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $usuario = User::find($id);
        $usuario->delete();
        $users = User::all();
        return view('user.index', ['usuarios' => $users]);
    }
}
