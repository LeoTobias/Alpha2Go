@extends('layouts.layout')
@section('conteudo')
    <div class="container" style="padding-top: 8%;">
        <section class="sucesso">
                <div class="titulo"><h1>Obrigado pela sua compra!</h1></div>
            <div class="divisao">
                <p class="linha"></p>
            </div>
            <div class="sub_titulo">
                <p>Sua compra foi realizada com sucesso, aguarde ser entregue no seu endereço.</p>
            </div>


            <div class="pedido_ok">
                <a href="#">
                    <img src="{{ asset('site/imagens/ok.svg') }}">                    
                </a>
            </div>
            <button type="button" class="btn btn-outline-primary">Meus pedidos</button>
        </section>
    </div>
@endsection
