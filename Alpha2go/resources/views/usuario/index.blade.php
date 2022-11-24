<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Lista de Usuarios</title>

</head>
<body >

    <h1> Lista de Usuarios </h1>

    <div class="row mt-4">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Email </th>
                    <th> Senha </th>
                    <th> CPF </th>
                </tr>
            </thead>
           <tbody>
           @foreach($usuarios as $usuario )
                <tr>
                    <td>{{$usuario->USUARIO_ID}}</td>
                    <td>{{$usuario->USUARIO_NOME}}</td>
                     <td>{{$usuario->USUARIO_EMAIL}}</td>
                     <td>{{$usuario->USUARIO_SENHA}}</td>
                     <td>{{$usuario->USUARIO_CPF}}</td>
                    <td>

                </tr>
   @endforeach

            </tbody>

        </table>
    </div>
    </main>
</body>
</html>
