@extends('layouts.layout')
@section('conteudo')
    <div class="col-6">
        <div class="row">
            @foreach ($items as $item)
                <hr class="hr bg-light">
    
                <div class="">
                    <div class="">
                        <div class="">
                            <img src="{{$item->Produto->Imagens[0]->IMAGEM_URL}}" width="140" class="img-fluid">
                        </div>
                    </div>
    
                    <div class="">
                        <div>
                            <span class="">Titulo: </span>
                            <span>{{$item->Produto->PRODUTO_NOME}}</span>
                        </div>
    
                        <div>
                            <span class="fw-bold">Categoria: </span>
                            <span>{{$item->Produto->Categoria->CATEGORIA_NOME}}</span>
                        </div>
    
                        <div>
                            <span class="fw-bold">Quantidade: </span>
                            <span>{{$item->ITEM_QTD}} unidade(s)</span>
                        </div>
    
                        <div>
                            <span class="fw-bold">Preço Unitario: </span>
                            <span>R$ {{number_format($item->ITEM_PRECO, 2)}}</span>
                        </div>
    
                        <div>
                            <span class="fw-bold">Valor Total do Item: </span>
                            <span>R$ {{number_format($item->ITEM_PRECO * $item->ITEM_QTD, 2)}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
    </div>
</section>
@endsection