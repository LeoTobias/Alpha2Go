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
@include('layouts.menu')
<main class="container mt-5">
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session()->get('success')}}
</div>
@endif
    <h1> Lista de Produtos </h1>
    <div class="row mt-4">
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
                  //  <td><img src="{{$product->image}}" style="width:60px"></td>
                    <td> {{$produto->PRODUTO_NOME}}</td>
                    <td>{{$produto->PRODUTO_PRECO}}</td>
                    <td>{{$produto->PRODUTO_DESC}}</td> 
                    <td>{{$product->CATEGORIA_ID}}</td>
                    <td>{{$produto->PRODUTO_DESCONTO}}</td> 
                    <td>{{$produto->PRODUTO_ATIVO}}</td>
           
                        <a href="#" class="btn btn-primary btn-sm">Visualizar</a>
                        //<a href="{{route('product.edit', $product->id)}}" class="btn btn-primary btn-sm">Editar</a>
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </main>
</body>
</html>
