
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="lt-cinza" href="{{url('/')}}">Alpha2Go</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a class="lt-cinza" href="">{{ $produto->PRODUTO_NOME }}</a></li>
    </ol>
</nav>
<div class="row">
    <div class="col-6 text-center">
        <img src="{{ asset($produto->imagem) }}" style="width: 250px;">
    </div>
    <div class="col-6 text-center">
        <h2 class="lt-branca"> {{ $produto->PRODUTO_NOME }} </h2>
        <span class="h4 lt-branca"> R$  </span>
        <div>
            <a  class="btn btn-primary"> Adicionar ao carrinho </a>
            <div class="d-block my-1">
                <span class="d-block my-1">
                </span>
            </div>
        </div>
    </div>
</div>

