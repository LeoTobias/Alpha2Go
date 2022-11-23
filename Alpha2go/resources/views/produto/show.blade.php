//{{$produto->PRODUTO_NOME}}
//{{$produto->Categoria->CATEGORIA_NOME}}
//{{$produto->Imagem->IMAGEM_NOME}}

@extends('layouts.store')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="lt-cinza" href="{{url('/')}}">Loja do Senac</a></li>
        <li class="breadcrumb-item"><a class="lt-cinza" href="{{ route('categoria.show', $produto->categoria->categoria_id) }}">{{ $produto->categoria->categoria_nome }}</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a class="lt-cinza" href="">{{ $product->name }}</a></li>
    </ol>
</nav>
<div class="row">
    <div class="col-6 text-center">
        <img src="{{ asset($produto->imagem) }}" style="width: 250px;">
    </div>
    <div class="col-6 text-center">
        <h2 class="lt-branca"> {{ $produto->PRODUTO_NOME }} </h2>
        <p class="lt-branca"> {{ $categoria->CATEGORIA_NOME }} </p>
        <span class="h4 lt-branca"> R$ {{ $produto->Imagem->IMAGEM_NOME }} </span>
        <div>
            <a href="{{ route('carrinho.add', $produto->produto_id) }}" class="btn btn-primary"> Adicionar ao carrinho </a>
            <div class="d-block my-1">
                <span class="d-block my-1">
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
