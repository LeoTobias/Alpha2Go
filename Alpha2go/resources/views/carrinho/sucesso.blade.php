@extends('layouts.layout')
@section('conteudo')
    <div class="container" style="padding-top: 5%;">
        <section class="sucesso">
            <div class="titulo">
                <h1>Obrigado pela sua compra!</h1>
            </div>

            <div class="divisao">
                <p class="linha"></p>
            </div>

            <div class="sub_titulo">
                <p>Sua compra foi realizada com sucesso, aguarde ser entregue no seu endereço.</p>
            </div>

            <div class="pedido_ok">
                <img src="{{ asset('site/imagens/ok.svg') }}">
            </div>

            <a href="{{route('pedidos')}}" class="link">
                <button type="button" class="btn btn-outline-primary">Meus pedidos</button>
            </a>

        </section>
    </div>
@endsection
