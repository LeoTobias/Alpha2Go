<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Lista de Produtos</title>

</head>
<body>
<main class="container mt-5">
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session()->get('success')}}
</div>
@endif

    <h1> Lista de Produtos </h1>
    <div class="row mt-4">
        <div class="row gy-5">
              @foreach($produtos as $produto)
                <div class="col-lg-4 cardapio-item">
                    <h4>{{$produto->PRODUTO_NOME}}</h4>
                  @if(count($produto->Imagens) > 0)
                        <a href="#"><img src="{{ $produto->Imagens[0]->IMAGEM_URL }}" class="cardapio-img img-fluid" alt=""></a>
                    @else
                        <a href="#"><img aria-placeholder="teste" class="cardapio-img img-fluid" alt=""></a>
                    @endif
                  <p class="ingredientes">
                    {{ $produto->PRODUTO_DESC}}
                  </p>
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
                    <form>
                        <div class="col-9 col-sm-5 col-md-6 col-xl-4 mx-auto mx-xl-0">
                            <div class="d-flex justify-content-between justify-content-xl-center p-2 rounded-pill border border-1 border-dark">
                                <button type="button" id="qtd-menos" class="btn btn-default border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                    </svg>
                                </button>
                                <input type="number" class="form-control w-auto text-center border-0 shadow-none" id="produto-qtd" name="qtd" value="1" min="1" max="">
                                <button type="button" id="qtd-mais" class="btn btn-default border-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                  <button type="button" class="btn btn-danger btn-sm">Adicionar ao carrinho</button>
                </div>
                @endforeach
            </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Desc </th>
                    <th> Preço </th>
                    <th> Desconto </th>
                    <th> Categoria ID </th>
                    <th> Produto Ativo </th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto )
                <tr>
                    <td>{{$produto->PRODUTO_ID}}</td>
                    
                    <td>{{$produto->PRODUTO_NOME}}</td>
                    <td>{{$produto->PRODUTO_DESC}}</td>
                    <td>{{$produto->PRODUTO_PRECO}}</td>
                    <td>{{$produto->PRODUTO_DESCONTO}}</td>
                    <td>{{$produto->CATEGORIA_ID}}</td>
                    <td>{{$produto->PRODUTO_ATIVO}}</td>

                    <td>
                        <a href="{{route('carrinho.add', $produto->PRODUTO_ID)}}" class="btn btn-primary btn-sm">Adicionar ao carrinho</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </main>
</body>
</html>
