<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{

    public function index(){
        $precoTotal    = 0;
        $descontoTotal = 0;

        $carrinho = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)
                                    ->where('ITEM_QTD', '>', 0)
                                    ->get();

        foreach ($carrinho as $item) {
            $precoTotal    += $item->produto->PRODUTO_PRECO    * $item->ITEM_QTD;
            $descontoTotal += $item->produto->PRODUTO_DESCONTO * $item->ITEM_QTD;
        }

        return view('carrinho.index')->with([
            'carrinho_item' => $carrinho,
            'precoTotal'    => $precoTotal,
            'descontoTotal' => $descontoTotal
        ]);
    }

    public function add ( Produto $Produto)
    {
         $item = Carrinho::where([['PRODUTO_ID','=',$Produto->PRODUTO_ID],
                                ['USUARIO_ID','=', Auth::user()->USUARIO_ID]
                                ])->first();

        if ($item) {
            $item->update(['ITEM_QTD' => $item->ITEM_QTD + 1]);
        }

        Carrinho::create ([
            'USUARIO_ID' => Auth::user()->USUARIO_ID,
            'PRODUTO_ID' => $Produto->PRODUTO_ID,
            'ITEM_QTD' => 1
        ]);

        return redirect()->back();
    }


    public function remove (Produto $Produto) {
        $item = Carrinho::where([['PRODUTO_ID','=',$PRODUTO->ID],
                                ['USUARIO_ID','=', Auth::user()->USUARIO_ID]
                                ])->first();

        if ($item) {
            $item->update(['ITEM_QTD' => $item->ITEM_QTD - 1]);

            dd('Atualizou a quantidade para menos');
        }

        $item->delete();

        dd('Removeu no carrinho');
    }


    public function show(){
        $carrinho = Carrinho::where(['USUARIO_ID', '=', Auth::user()->USUARIO_ID])->get();

        return view ('carrinho.show')->with('carrinho', $carrinho);
    }
}
