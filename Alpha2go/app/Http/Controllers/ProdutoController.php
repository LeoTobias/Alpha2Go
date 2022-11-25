<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Categoria;


class ProdutoController extends Controller
{
    public function home()
    {
        $produto = Produto::all();
        return view('site.home')->with('produtos', $produto);
    }

    public function index()
    {
        $produto = Produto::ativos();
        return view('produto.index')->with('produtos', $produto);
    }

    public function show(Produto $produto)
    {
        return view('produto.show')->with('produto', $produto);
    }
}
