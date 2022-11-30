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

    public function index(Request $request)
    {
        if (isset($request->categoria)) {
            $produto = Produto::where('CATEGORIA_ID', '=', $request->categoria)
                                ->where('PRODUTO_ATIVO', TRUE)
                                ->whereRelation('Estoque', 'PRODUTO_QTD', '>', 0)
                                ->get();

        } else {
            $produto = Produto::ativos();
        }

        return view('produto.index')->with('produtos', $produto);
    }

    public function show(Produto $produto)
    {
        
        return view('produto.show')->with('produto', $produto);
    }
}
