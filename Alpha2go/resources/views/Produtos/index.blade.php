<h1>Pagina que retorna os produtos</h1>

@foreach ($produtos as $produto)
    <li>{{$produto->name}}
        <a href="{{ route('produto.edit', $produto->id) }}">Editar </a></li>
        <a href="{{ route('produto.destroy', $produto->id) }}">Apagar</a></li>
@endforeach
