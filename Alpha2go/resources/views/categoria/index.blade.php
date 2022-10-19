@foreach ($categorias as $categoria)

    <li>{{$categoria->CATEGORIA_ID}}
        {{$categoria->CATEGORIA_NOME}}
        {{$categoria->CATEGORIA_DESC}}
 </li>

@endforeach
