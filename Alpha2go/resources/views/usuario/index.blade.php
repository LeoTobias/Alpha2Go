@foreach ($users as $user)

    <li>{{$user->USUARIO_ID}}
        {{$user->USUARIO_NOME}}
        {{$user->USUARIO_EMAIL}}
        {{$user->USUARIO_SENHA}}
        {{$user->USUARIO_CPF}}
 </li>

@endforeach
