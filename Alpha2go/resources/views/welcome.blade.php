<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrador</title>
</head>
<body>
    <h1> Projeto Integrador
    @if (Auth::user())
        {{ Auth::user()->USUARIO_NOME}}
    @else
        {{ "Faça o Login" }}
    @endif
    </h1>


        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit">Logout</button>
</form>
        </body>
</html>
