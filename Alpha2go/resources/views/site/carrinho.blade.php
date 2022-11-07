@extends('site.master.layout')
@section('conteudo')

<div class="container" style="padding-top: 10%;">
        <section class="col">
            <div>
                <div><h3>Otima escolha!</h3></div>
                <div><h1>Seu carrinho</h1></div>
            </div>
        </section>
        <br>
        <section class="carrinho">
            <div class="row top_tab">
                <div class="col-md-5">
                    <div class="nome_titulo float-left">
                        Produto
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="preco_titulo">
                        Preço
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="qnt_titulo">
                        Quantidade
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="total_titulo">
                        Total
                    </div>
                </div>
                <div class="col-md-1">

                </div>
            </div>
            <div class="row flex-tab">
                <div class="col-md-5">
                    <div class="carrinho_item">
                        <img src="{{ asset('site/imagens/PizzaCalabresa.png') }}" class="img-fluid">
                        <div class="caption flex-column">
                            <h4>Pizza Calabresa</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="preco">
                        <p>R$ 26,35</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="menos"><i class="bi bi-arrow-left-circle-fill"></i></button>
                    <span class="contagem">1</span>
                    <button class="mais"><i class="bi bi-arrow-right-circle-fill"></i></button>
                </div>
                <div class="col-md-2">
                    <div class="total">
                        <p>R$ 26,35</p>
                    </div>
                </div>
                <div class="col-md-1 text-center">
                    <a href="#"><img src="{{ asset('site/imagens/remove-icon.png') }}" class="img-fluid"></a>
                </div>
            </div>
            <div class="row flex-tab">
                <div class="col-md-5">
                    <div class="carrinho_item">
                        <img src="{{ asset('site/imagens/PizzaMussarela.png') }}" class="img-fluid">
                        <div class="caption flex-column">
                            <h4>Pizza Mussarela</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="preco">
                        <p>R$ 26,35</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="menos"><i class="bi bi-arrow-left-circle-fill"></i></button>
                    <span class="contagem">1</span>
                    <button class="mais"><i class="bi bi-arrow-right-circle-fill"></i></button>
                </div>
                <div class="col-md-2">
                    <div class="total">
                        <p>R$ 26,35</p>
                    </div>
                </div>
                <div class="col-md-1 text-center">
                    <a href="#"><img src="{{ asset('site/imagens/remove-icon.png') }}" class="img-fluid"></a>
                </div>
            </div>
            <div class="row flex-tab">
                <div class="col-md-5">
                    <div class="carrinho_item">
                        <img src="{{ asset('site/imagens/PizzaCalabresa.png') }}" class="img-fluid">
                        <div class="caption flex-column">
                            <h4>Pizza Calabresa</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="preco">
                        <p>R$ 26,35</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="menos"><i class="bi bi-arrow-left-circle-fill"></i></button>
                    <span class="contagem">1</span>
                    <button class="mais"><i class="bi bi-arrow-right-circle-fill"></i></button>
                </div>
                <div class="col-md-2">
                    <div class="total">
                        <p>R$ 26,35</p>
                    </div>
                </div>
                <div class="col-md-1 text-center">
                    <a href="#"><img src="{{ asset('site/imagens/remove-icon.png') }}" class="img-fluid"></a>
                </div>
            </div>
            <div class="row carrinhoTotal">
                <div class="col-md align-items-center">
                    <div class="finalCompra">
                       <h4>Total do carrinho</h4>
                        <div class="total_compra">
                            <span>Total da compra:</span>
                            <span>R$36,11</span>
                        </div>
                        <div class="preco_frete">
                            <span>Frete:</span>
                            <span>Entrega GRÁTIS</span>
                        </div>

                       <div class="valor_total">
                           <span>Total:</span>
                           <span>R$36,11</span>
                       </div>
                    </div>
                </div>
            </div>
            <div class="row carrinhoTotal">
                <div class="col-md-6">
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Código do cupom"><input type="submit" value="Adicionar cupom">
                    </form>
                </div>

                <div class="col-md-3 text-right">
                    <button type="button" class="btn btn-outline-primary-grey grey">Continuar comprando</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-outline-primary-red">Finalizar compra</button>
                </div>
            </div>
            <hr><br>
        </section>
</div>



@endsection









