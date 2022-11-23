/*@foreach ($categorias as $categoria)

    <li>{{$categoria->CATEGORIA_ID}}
        {{$categoria->CATEGORIA_NOME}}
        {{$categoria->CATEGORIA_DESC}}
 </li>

@endforeach*/


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Lista de Categorias</title>
   
</head>
<body >
@include('layouts.menu')
<main class="container mt-5">
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session()->get('success')}}
</div>
@endif
    <h1> Lista de Categorias </h1>
   
    <div class="row mt-4">
        <table class="table table-stripped">
            <thead>  
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Descrição </th>
                </tr>
            </thead>
           <tbody>
           @foreach($categorias as $categoria )
                <tr>
                    <td>{{$categoria->CATEGORIA_ID}}</td>
                    <td>{{$categoria->CATEGORIA_NOME}} ({{$categoria->produtos->count()}})</td>
                    {{$categoria->CATEGORIA_DESC}}
                    <td>
                    <td> 
                        <a href="#" class="btn btn-primary btn-sm">Visualizar</a>     
                    </td>
                </tr>
                @endforeach
            </tbody>
           </tbody>
        </table>
    </div>
    </main>
</body>
</html>
