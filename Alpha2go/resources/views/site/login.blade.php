@extends('layouts.layout')
@section('conteudo')

<div class="container" style="padding-top: 5%;">
    <section class="login">
        <div>
            <div>
                <h3>Bem Vindo!</h3>
            </div>
            <div>
                <h1 class="log_big_title">Faça Login ou Cadastre-se</h1>
            </div>
        </div>
    </section>
    <hr>
    <section class="conteudo">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <form class="login_form" action="{{ route('login.store') }}" method="post">
                        @csrf
                        <div class="login_titulo">
                            <h3>Login</h3>
                        </div>
                        <div class="usuario">
                            <div class="form-group">
                                <label for="usr">Usuario:</label>
                                <input type="text" class="form-control" id="usr" name="email" autocomplete="off">
                            </div>
                        </div>
                        <div class="password">
                            <div class="form-group">
                                <label for="pwd">Senha:</label>
                                <input type="password" class="form-control" id="pwd" name="password" autocomplete="off">
                            </div>
                        </div>

                        <div class="login_form_check">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input-sizes" type="checkbox" id="CheckBox" value="lembreme">
                                <label class="form-check-label" for="CheckBox">Lembre-me</label>
                            </div>
                            <button type="submit" class="btn btn-outline-primary green">login</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <form class="cadastro_form" action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="cadastro_titulo">
                            <h3>Cadastre-se</h3>
                        </div>
                        <div class="usuario">
                            <div class="form-group">
                                <label for="usr">Nome e Sobrenome:</label>
                                <input type="text" class="form-control" id="usr" name="nome" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="usr">Email:</label>
                                <input type="text" class="form-control" id="usr" name="email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="usr">CPF:</label>
                                <input type="text" class="form-control" id="usr" name="cpf" autocomplete="off">
                            </div>
                            <div class="password">
                                <div class="form-group">
                                    <label for="pwd">Senha:</label>
                                    <input type="password" class="form-control" id="pwd" name="senha" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <hr><br>
</div>

@endsection
