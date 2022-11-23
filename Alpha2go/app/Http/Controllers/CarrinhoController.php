<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;

class CarrinhoController extends Controller

{
    public function add ( Produto $Produto) {
        dd($produto);
    }


   // public function index(){
     //   $carrinho_item = Carrinho::where('USUARIO_ID', Auth()->user()->id)->get();
      //  return view('carrinho.index')->with('carrinho_item', $item_qtd);
   // }
}


