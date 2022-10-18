<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuario.index')->with('usuarios', $user);
    }

  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(User $user)
    {
        return view('usuario.show')->with('usuarios', $user);
    }

   
    public function edit(User $user)
    {
        //
    }

    
    public function update(Request $request, User $user)
    {
        //
    }

   
    public function destroy(User $user)
    {
        //
    }
}
