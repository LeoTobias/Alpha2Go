@foreach ($usuarios as $usuario)

    <li>{{$usuario->USUARIO_ID}}
        {{$usuario->USUARIO_NOME}}
        {{$usuario->USUARIO_EMAIL}}
        {{$usuario->USUARIO_SENHA}}
        {{$usuario->USUARIO_CPF}}
 </li>

@endforeach
