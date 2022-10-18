<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $user = User::all();
        return view('usuario.index')->with('users', $user);
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
        return view('usuario.show')->with('user', $user);
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
