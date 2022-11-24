<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller

{

        public function index()
        {
            $categoria = Categoria::all();
            return view('site.home')->with('categorias', $categoria);
        }


        public function create()
        {

        }


        public function store(Request $request)
        {

        }


        public function show(Categoria $categoria)
        {
            return view('categoria.show')->with('categoria', $categoria);
        }


        public function edit(Categoria $categoria)
        {

        }


        public function update(Request $request, Categoria $categoria)
        {

        }


        public function destroy(Categoria $categoria)
        {

        }
    }


