@extends('layouts.layout')
@section('conteudo')

<div class="container" style="padding-top: 5%;">
        <section class="col">
            @if (session()->has('error-message'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error-message') }}
                </div>
            @endif
            <div>
                <div><h3>Otima escolha!</h3></div>
                <div><h1>Seu carrinho</h1></div>
            </div>
        </section>
        <br>
        <section class="carrinho">
            <div class="row top_tab">
                <div class="col-md-5">
                    <div class="nome_titulo float-left">Produto</div>
                </div>

                <div class="col-md-2">
                    <div class="preco_titulo">Preço</div>
                </div>

                <div class="col-md-2">
                    <div class="qnt_titulo">Quantidade</div>
                </div>

                <div class="col-md-2">
                    <div class="total_titulo">Total</div>
                </div>

                <div class="col-md-1"></div>
            </div>
            @foreach($carrinho_item as $item)
            <div class="row flex-tab">
                <div class="col-md-5">
                    <div class="carrinho_item">
                        @if ( isset($item->Produto->Imagens[0]) )
                            <img src="{{ $item->Produto->Imagens[0]->IMAGEM_URL}}" alt="..." class=" img-fluid")>
                        @else
                            <img src="https://via.placeholder.com/177x265/F8F8F8/CCC?text=Sem%20Imagem" alt="..." class="img-fluid">
                        @endif
                        <div class="caption flex-column">
                            <h4>{{$item->Produto->PRODUTO_NOME}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="preco">
                        <p>R$ {{$item->Produto->PRODUTO_PRECO - $item->Produto->PRODUTO_DESCONTO}}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="menos"><i class="bi bi-arrow-left-circle-fill"></i></button>
                    <span class="contagem">{{$item->ITEM_QTD}}</span>
                    <button class="mais"><i class="bi bi-arrow-right-circle-fill"></i></button>
                </div>
                <div class="col-md-2">
                    <div class="total">
                        <p>R$ {{number_format(($item->Produto->PRODUTO_PRECO - $item->Produto->PRODUTO_DESCONTO) * $item->ITEM_QTD, 2)}}</p>
                    </div>
                </div>
                <div class="col-md-1 text-center">
                    <a href="#"><img src="{{ asset('site/imagens/remove-icon.png') }}" class="img-fluid"></a>
                </div>
            </div>
            @endforeach
            <div class="row carrinhoTotal">
                <div class="col-md align-items-center">
                    <div class="finalCompra">
                       <h4>Total do carrinho</h4>
                        <div class="total_compra">
                            <span>Total da compra:</span>
                            <span>R$ {{number_format($precoTotal, 2)}}</span>
                        </div>

                        <div class="total_compra">
                            <span>Desconto:</span>
                            <span>R$ {{number_format($descontoTotal, 2)}}</span>
                        </div>

                        <div class="preco_frete">
                            <span>Frete:</span>
                            <span>Entrega GRÁTIS</span>
                        </div>

                       <div class="valor_total">
                           <span>Total:</span>
                           <span>R$ {{number_format($precoTotal - $descontoTotal, 2)}}</span>
                       </div>
                    </div>
                </div>
            </div>
            <div class="row carrinhoTotal">
                <div class="col-md-6"></div>

                <div class="col-md-3 text-right">
                    <a href="{{ route('produto.index') }}">
                    <button type="button" class="btn btn-outline-primary-grey grey">Continuar comprando</button>
                    </a>
                </div>
                <div class="col-md-3">
                    <form action="{{route('pedido.store')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary-red">Finalizar compra</button>
                    </form>
                </div>
            </div>
            <hr><br>
        </section>
</div>



@endsection
