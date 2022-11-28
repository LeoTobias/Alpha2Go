@extends('layouts.layout')

@section('conteudo')
    <main class="container mt-5">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session()->get('success')}}
            </div>
        @endif

        <h1> Lista de Produtos </h1>

        <div class="row row-cols-3">
            @foreach($produtos as $produto)
                <div class="col border">
                    <h4>{{$produto->PRODUTO_NOME}}</h4>

                @if(count($produto->Imagens) > 0)
                    <a href="#"><img src="{{ $produto->Imagens[0]->IMAGEM_URL }}" class="cardapio-img img-fluid" alt=""></a>
                @else
                    <a href="#"><img aria-placeholder="teste" class="cardapio-img img-fluid" alt=""></a>
                @endif

                    <p class="ingredientes">{{ $produto->PRODUTO_DESC}}</p>

                @if ($produto->PRODUTO_DESCONTO > 0)
                    <span class="badge rounded-0 rounded-start position-absolute translate-middle bg-danger fs-5 desconto">{{number_format($produto->PRODUTO_DESCONTO / $produto->PRODUTO_PRECO * 100, 0)}}%</span>
                    <div class="d-flex">
                        <span class="fw-semibold me-3 fs-5">R$ {{number_format($produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO, 2)}}</span>
                        <span class="fw-semibold"><s>R$ {{$produto->PRODUTO_PRECO}}</s></span>
                    </div>
                @else
                    <div class="d-block">
                        <span class="fw-semibold fs-5">R$ {{$produto->PRODUTO_PRECO}}</span>
                    </div>
                @endif

                  <form action="{{route('carrinho.add', $produto->PRODUTO_ID)}}" method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm">Adicionar ao carrinho</button>
                  </form>
              </div>
            @endforeach
        </div>

        <ul>
            @foreach (App\Models\Categoria::ativo() as $categoria)
                <li><a href="?categoria={{$categoria->CATEGORIA_ID}}">{{$categoria->CATEGORIA_NOME}}</a></li>
            @endforeach
        </ul>

    </main>
@endsection
