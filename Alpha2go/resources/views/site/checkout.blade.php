@extends('site.master.layout')
@section('conteudo')

<div class="container" style="padding-top: 8%;">

        <section class="sucesso">
                <div class="titulo"><h1>run checkout</h1></div>
            <div class="divisao">
                <p class="linha"></p>
            </div>
            <div class="sub_titulo">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa  officia deserunt mollitid est laborum. Sed ut perspiciatis unde qui omnis.</p>
            </div>

        </section>

        <section class="checkout">
            <div class="row">
                <div class="col-lg-6">
                    <div class="run_checkout_box">
                        <h3 class="no_border">billing details</h3>
                        <form action="">
                            <div class="country">
                                <select name="Country" class="custom-select">
                                    <option selected>Brasil</option>
                                </select>
                            </div>
                            <div class="name">
                               <input type="text" class="custom-control" id="usr1" placeholder="First Name">
                               <input type="text" class="custom-control" id="usr2" placeholder="Last Name">
                            </div>
                            <div class="email_phone">
                                <input type="text" class="custom-control" id="usr3" placeholder="Email">
                                <input type="text" class="custom-control" id="usr4" placeholder="Phone">
                            </div>
                            <div class="company_name">
                                <input type="text" class="custom-control" id="usr5" placeholder="Company name">
                            </div>
                            <div class="company_address">
                                <input type="text" class="custom-control" id="usr6" placeholder="Street address">
                            </div>

                            <div class="appartment_town">
                                <input type="text" class="custom-control" id="usr7" placeholder="Appartment">
                                <input type="text" class="custom-control" id="usr8" placeholder="Town / City">
                            </div>
                            <div class="state_postal">
                                <input type="text" class="custom-control" id="usr9" placeholder="State">
                                <input type="text" class="custom-control" id="usr10" placeholder="PostalCode / Zip">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shipping_box top_margin_50">
                        <h4>order total</h4>
                        <div class="price_amount">
                            <span>cart subtotal:</span>
                            <p>$36.11</p>
                        </div>
                        <div class="shipping_price">
                            <span>shipping & hadling:</span>
                            <p>Free shipping</p>
                        </div>

                        <div class="order_total">
                            <span>order total:</span>
                            <p>$36.11</p>
                        </div>
                    </div>
                    <h3 class="payment_method">payment method</h3>
                    <div class="method_payment">
                        <select name="Payment" class="custom-select">
                            <option selected value="1">Cartão de Credito</option>
                            <option value="2">Cartão de Debito</option>
                            <option value="3">Dinheiro</option>
                        </select>
                        <label><span>*</span> Sed pharetra nunc ultrices, elementum velit fringilla, fringilla risus. Phase llus cursus est et nunc sagittis consectetur ac quis ante</label>
                    </div>
                    <button type="button" class="btn btn-outline-primary">place order</button>
                </div>
            </div>
        </section>
    </div>

@endsection