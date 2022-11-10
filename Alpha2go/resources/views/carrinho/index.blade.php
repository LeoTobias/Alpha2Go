<section class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Produto ID</th>
                <th>Item Qtd</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carrinho_item as $item)
            <tr>
                <td>{{$item->Product->PRODUTO_NOME}}</td>
                <td>{{$item->ITEM_QTD}}</td>
                <td>{{$item->Produto->PRODUTO_PRECO}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
