<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Carrinho;
use App\Models\Pedido_Item;
use App\Models\Produto_Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->paginate(10);

        return view('usuario.pedidos')->with([
            "pedidos" => $pedidos
        ]);
    }

    public function store(Request $request)
    {
        $dataCompra = new \DateTime('', new \DateTimeZone('America/Sao_Paulo'));

        $produtosCarrinho = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)
                                            ->where('ITEM_QTD', '>', 0)
                                            ->get()
                                            ->all();

        if (!$produtosCarrinho) {
            session()->flash('error-message', 'Carrinho vazio, adicione um produto ao carrinho para prosseguir com a compra');

            return redirect()->back();
        }

        $pedido = Pedido::create([
            'USUARIO_ID'  => Auth::user()->USUARIO_ID,
            'STATUS_ID'   => 1,
            'PEDIDO_DATA' => $dataCompra->format('Y-m-d')
        ]);

        if ( isset($pedido->PEDIDO_ID) ) {

            foreach ($produtosCarrinho as $comida) {
                Pedido_Item::create([
                    'PRODUTO_ID' => $comida->PRODUTO_ID,
                    'PEDIDO_ID'  => $pedido->PEDIDO_ID,
                    'ITEM_QTD'   => $comida->ITEM_QTD,
                    'ITEM_PRECO' => $comida->produto->PRODUTO_PRECO - $comida->produto->PRODUTO_DESCONTO
                ]);

                $estoqueAtual = Produto_Estoque::where('PRODUTO_ID', $comida->PRODUTO_ID)->first()->PRODUTO_QTD;

                Produto_Estoque::where('PRODUTO_ID',  $comida->PRODUTO_ID)
                    ->update(['PRODUTO_QTD' => $estoqueAtual - $comida->ITEM_QTD]);

                Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)
                    ->where('PRODUTO_ID',  $comida->PRODUTO_ID)
                    ->update(['ITEM_QTD' => 0]);
            }
        }

        return view('carrinho.sucesso');
    }

    public function show(Request $request)
    {
        $precoTotal = 0;
        $items      = Pedido_Item::where('PEDIDO_ID', $request->id)->get();

        if (!isset($items[0]) || $items[0]->pedido->USUARIO_ID != Auth::user()->USUARIO_ID)
            return redirect()->route('pedidos');

        foreach ($items as $item)
            $precoTotal += $item->ITEM_QTD * $item->ITEM_PRECO;

        return view('usuario.pedido')->with([
            'items'      => $items,
            'precoTotal' => $precoTotal,
        ]);
    }


    public function edit(Pedido $pedido)
    {
        //
    }


    public function update(Request $request, Pedido $pedido)
    {
        //
    }


    public function destroy(Pedido $pedido)
    {
        //
    }
}
