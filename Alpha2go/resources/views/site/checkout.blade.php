@extends('layouts.layout')
@section('conteudo')

<div class="container" style="padding-top: 8%;">

        <section class="sucesso">
                <div class="titulo"><h1>Finalize seu pedido</h1></div>
            <div class="divisao">
                <p class="linha"></p>
            </div>
            <div class="sub_titulo">
                <p>Escolha o metodo de pagamento e confirme seus dados.</p>
            </div>

        </section>

        <section class="checkout">
            <div class="row">
                <div class="col-lg-6">
                    <div class="run_checkout_box">
                        <h3 class="no_border">Detalhes da Cobrança</h3>
                        <form action="">
                            <div class="country">
                                <select name="Country" class="custom-select">
                                    <option selected>Brasil</option>
                                </select>
                            </div>
                            <div class="name">
<<<<<<< Updated upstream
                               <input type="text" class="custom-control" id="usr1" placeholder="First Name" autocomplete="off">
                               <input type="text" class="custom-control" id="usr2" placeholder="Last Name" autocomplete="off">
                            </div>
                            <div class="email_phone">
                                <input type="text" class="custom-control" id="usr3" placeholder="Email" autocomplete="off">
                                <input type="text" class="custom-control" id="usr4" placeholder="Phone" autocomplete="off">
                            </div>
                            <div class="company_name">
                                <input type="text" class="custom-control" id="usr5" placeholder="Company name" autocomplete="off">
                            </div>
                            <div class="company_address">
                                <input type="text" class="custom-control" id="usr6" placeholder="Street address" autocomplete="off">
                            </div>

                            <div class="appartment_town">
                                <input type="text" class="custom-control" id="usr7" placeholder="Appartment" autocomplete="off">
                                <input type="text" class="custom-control" id="usr8" placeholder="Town / City" autocomplete="off">
                            </div>
                            <div class="state_postal">
                                <input type="text" class="custom-control" id="usr9" placeholder="State" autocomplete="off">
                                <input type="text" class="custom-control" id="usr10" placeholder="PostalCode / Zip" autocomplete="off">
=======
                               <input type="text" class="custom-control" id="usr1" placeholder="Primeiro nome">
                               <input type="text" class="custom-control" id="usr2" placeholder="Sobrenome ">
                            </div>
                            <div class="email_phone">
                                <input type="text" class="custom-control" id="usr3" placeholder="Email">
                                <input type="text" class="custom-control" id="usr4" placeholder="Celular">
                            </div>
                            <div class="company_address">
                                <input type="text" class="custom-control" id="usr6" placeholder="Endereço">
                            </div>

                            <div class="appartment_town">
                                <input type="text" class="custom-control" id="usr7" placeholder="Complemento">
                                <input type="text" class="custom-control" id="usr8" placeholder="Cidade">
                            </div>
                            <div class="state_postal">
                                <input type="text" class="custom-control" id="usr9" placeholder="Estado">
                                <input type="text" class="custom-control" id="usr10" placeholder="CEP">
>>>>>>> Stashed changes
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shipping_box top_margin_50">
                        <h4>Total do carrinho</h4>
                        <div class="price_amount">
                            <span>Valor do carrinho:</span>
                            <p>$36.11</p>
                        </div>
                        <div class="shipping_price">
                            <span>Frete:</span>
                            <p>GRÁTIS</p>
                        </div>

                        <div class="order_total">
                            <span>Valor total:</span>
                            <p>R$36.11</p>
                        </div>
                    </div>
                    <h3 class="payment_method">Forma de pagamento</h3>
                    <div class="method_payment">
                        <select name="Payment" class="custom-select">
                            <option selected value="1">Cartão de Credito</option>
                            <option value="2">Cartão de Debito</option>
                            <option value="3">Dinheiro</option>
                        </select>
                        <hr><br>
                    </div>
                    <button type="button" class="btn btn-outline-primary">Finalizar pedido</button>
                </div>
            </div>
        </section>
    </div>
    <hr><br>


@endsection
