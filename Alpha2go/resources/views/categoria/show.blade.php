@section('content')
<style>
    .espacamento{
        margin-top: 10px;
    }
</style>
<div class="row py5">
    <div class="text-center">
    <h2 class="lt-branca"> {{ $categoria->CATEGORIA_NOME }} </h2>
        <span class="text-muted lt-cinza"> Confira abaixo os itens {{$categoria->CATEGORIA_NOME}} </span>
    </div>
</div>
    <div class="row">
    @foreach($produtos as $produto)
        <div class="col-lg-4 col-md-6 col-sm-10 mx-auto espacamento">
            <div class="text-center" style="height: 250px;">
                <img src="{{ asset($produto->image)}}" class="h-100">
            </div>
            <div class="text-center">
                <span class="d-block fw-bold lt-branca">{{$produto->PRODUTO_NOME}}</span>
                <span class="d-block fw-bold lt-branca">{{$produto->PRODUTO_PRECO}}</span>
                <div class="mt-2">
                    <a href="{{ route('produto.show', $produto->PRODUTO_ID) }}" class="btn btn-primary">Visualizar</a>
                    <a href="{{ route('carrinho.add', $produto->PRODUTO_ID) }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
    </div>
</section>
@endsection
