@extends('layouts.layout')

@section('conteudo')
<div class="container mt-5">
    <table class="table">
        <thead>
            <tr class="align-middle history-header">
                <th scope="col">ID</th>
                <th scope="col">DATA DA COMPRA</th>
                <th scope="col">MÉTODO DE PAGAMENTO</th>
                <th scope="col">STATUS</th>
                <th scope="col">Nº DE ITENS</th>
                <th scope="col">TOTAL DA COMPRA</th>
            </tr>
        </thead>
        <tbody>
            @if ($pedidos->count() != 0)
                @foreach ($pedidos as $pedido)
                    @php
                        $precoTotal = [];
                        $itensTotal = 0;

                        foreach ($pedido->Itens as $item) {
                            $precoTotal[] = $item->ITEM_QTD * ($item->ITEM_PRECO);
                            $itensTotal += $item->ITEM_QTD;
                        }
                    @endphp
                    <tr>
                        <th scope="row"><a href="{{route('pedido', $pedido->PEDIDO_ID)}}" class="link text-dark">#{{$pedido->PEDIDO_ID}}</a></th>
                        <td>{{implode('/', array_reverse(explode('-', $pedido->PEDIDO_DATA)))}}</td>
                        <td class="pagamento"></td>
                        <td><span class="badge rounded-pill px-2 status">{{$pedido->Pedido_Status->STATUS_DESC}}</span></td>
                        <td>{{$itensTotal}}</td>
                        <td>R$ {{number_format(array_sum($precoTotal), 2)}}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">Você não possui nenhum pedido</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection
