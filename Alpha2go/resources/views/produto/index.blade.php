@extends('layouts.layout')

@section('conteudo')
    <main class="container mt-5">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session()->get('success')}}
            </div>
        @endif

        <section id="cardapio" class="cardapio">
            <div class="container">
            <div class="section-cardapio ">
            <h2>Nosso Cardapio</h2>
            </div>
                <ul class="nav nav-tabs d-flex justify-content-center">
                    @foreach (App\Models\Categoria::ativo() as $categoria)
                    <li class="nav-item">
                        <a href="?categoria={{$categoria->CATEGORIA_ID}}" class="nav-link active show">
                        <h4>{{$categoria->CATEGORIA_NOME}}</h4>
                        </a>
                    </li>
                    @endforeach
                </ul>

            <div class="tab-content">
            <div class="tab-pane fade active show" id="cardapio-pizzas">
                <div class="tab-header text-center">
                <p>cardapio</p>
                </div>
                <div class="row gy-5">
                @foreach($produtos as $produto)
                    <div class="col-lg-4 cardapio-item d-flex flex-column align-items-center">
                    <h4>{{$produto->PRODUTO_NOME}}</h4>
                        @if(count($produto->Imagens) > 0)
                            <a href="#"><img src="{{ $produto->Imagens[0]->IMAGEM_URL }}" class="cardapio-img img-fluid" alt=""></a>
                        @else
                            <a href="#"><img aria-placeholder="teste" class="cardapio-img img-fluid" alt=""></a>
                        @endif
                    <div class="ingredientes">
                      <span  class="text-center" style=" display: block; max-width: 200px;"> {{ $produto->PRODUTO_DESC}} </span> 
                    </div>
                        @if ($produto->PRODUTO_DESCONTO > 0)
                            <div class="d-flex preco">
                                <span class="fw-semibold me-3 fs-5">R$ {{number_format($produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO, 2)}}</span>
                                <span class="fw-semibold"><s>R$ {{$produto->PRODUTO_PRECO}}</s></span>
                            </div>
                        @else
                            <div class="d-block preco">
                                <span class="fw-semibold fs-5">R$ {{$produto->PRODUTO_PRECO}}</span>
                            </div>
                        @endif
                    <form action="{{route('carrinho.add', $produto->PRODUTO_ID)}}" method="post">
                        @csrf
                        <input type="hidden" name="qtd" value="1">
                        <button type="submit" class="btn btn-danger btn-sm" style="margin-bottom: 5px;">Adicionar ao carrinho</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </div>
            </div>
        </div>
        </section>
    </main>
@endsection
