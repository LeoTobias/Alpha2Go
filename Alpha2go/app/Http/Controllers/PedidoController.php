<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Pedido::all());
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
      dd($request->all());
    //  $pedido = Pedido::where(['PEDIDO_ID' => $request->header('PEDIDO_ID'), 'USUARIO_ID' => $request->USUARIO_ID])->first();
    }

    /* return response() -> json([
            'status' => 200,
            'mensagem' => "Itens adicionados no pedido",
            'pedidp' => new PedidoResource($pedido)
        ], 200);*/
    
    
    
    
    public function show(Pedido $pedido)
    {
        return response()->json([
            'status' => 200,
            'pedido' => $pedido,
            'pedido_id' => $pedido->Pedido_Id
                                
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
