<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;

class CarrinhoController extends Controller

{
    public function add ( Produto $Produto) {
     $item = Carrinho::where([['PRODUTO_ID','=',$PRODUTO->ID],
                            ['USUARIO_ID','=',usuario()->id]
                            ])->first();
    if ($item) {
      $item->update([
                    'ITEM_QTD' => $item->ITEM_QTD + 1
      ]);
      dd('Atualizou a quantidade');
    }

        Carrinho::create ([
                      'USUARIO_ID' => usuario()->id,
                      'PRODUTO_ID' => $produto->id,
                      'ITEM_QTD' => 1
        ]);
      dd('Adicionou no carrinho');
    }


   public function remove ( Produto $Produto) {
     $item = Carrinho::where([['PRODUTO_ID','=',$PRODUTO->ID],
                  ['USUARIO_ID','=',usuario()->id]
                  ])->first();
    if ($item) {
      $item->update([
                    'ITEM_QTD' => $item->ITEM_QTD - 1
      ]);
      dd('Atualizou a quantidade para menos');
    }

     $item->delete();
      dd('Removeu no carrinho');
    }

public function show {
  $carrinho = Carrinho::where(['USUARIO_ID', '=', usuario()->id])->get();
  return view ('carrinho,show')->with('carrinho', $carrinho);
}
}
