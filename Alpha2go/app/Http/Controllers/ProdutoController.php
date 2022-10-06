<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
        $produto = Produto::all();
        return view('produto.index')->with('produtos', $produto);
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(Produto $produto)
    {
        return view('produto.show')->with('produto', $produto);
    }


    public function edit(Produto $produto)
    {

    }


    public function update(Request $request, Produto $produto)
    {

    }


    public function destroy(Produto $produto)
    {

    }
}
