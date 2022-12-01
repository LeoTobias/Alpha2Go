
@extends('layouts.layout')
@section('conteudo')

<div class="carousel slide" id="home" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 carouselPrincipal" src="{{ asset('site/imagens/hamburguer.jpeg') }}" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carouselPrincipal" src="{{ asset('site/imagens/PizzaCalabresa.png') }}" alt="Segundo Slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100 carouselPrincipal" src="{{ asset('site/imagens/sushi.jpg') }}" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#home" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>


<section id="contato" class="contato">
      <div class="container">
        <div class="section-contato">
          <h2>Contato</h2>
          <p>Precisa de ajuda? <span>Nos contate</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116933.69031522742!2d-46.83132673750004!3d-23.66959799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5036539648d5%3A0x78501a72680ea23a!2sCentro%20Universit%C3%A1rio%20Senac%20-%20Santo%20Amaro!5e0!3m2!1spt-BR!2sbr!4v1666987926801!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Endereço</h3>
                <p>Avenida das Nações Unidas<br>
                São Paulo - SP<br></p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>alpa2go@hotmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Celular</h3>
                <p>(11)97070-7070</p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Horario de funcionamento</h3>
                <div>
                  <strong>Segunda á Sabado: </strong>10:00hr - 23:00hr<br>
                  Domingo: Fechado
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br>
    @endsection
