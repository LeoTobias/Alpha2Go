@foreach ($produtos as $produto)

    <li>{{$produto->PRODUTO_ID}}
        {{$produto->PRODUTO_NOME}}
        {{$produto->PRODUTO_DESC}}
        {{$produto->PRODUTO_PRECO}}
        {{$produto->PRODUTO_DESCONTO}}
        {{$produto->PRODUTO_ATIVO}}
 </li>

@endforeach
