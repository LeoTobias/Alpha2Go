<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="/Alpha2go/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/Alpha2go/vendor/aos/aos.css" rel="stylesheet">

  <link href="style.css" rel="stylesheet">
  <script src="js/script.js"></script>

  <script src="/Alpha2go/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/Alpha2go/vendor/aos/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <title>Alpha2Go</title>
</head>
<body>

<header id="header" class="header fixed-top d-flex align-items-center col">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="home.blade.php" class="logo d-flex align-items-center">
        <img src="imagens/logoAlpha.png" alt="">
        <h1>Alpha2Go<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="#cardapio">Cardapio</a></li>
          <li><a href="#contato">Contato</a></li>
        </ul>
      </nav>
      <a class="btn-book-a-table" href="{{ route('site.carrinho')}}"><img id="carrinho" src="imagens/carrinho.png"></a>
    </div>
</header>

<div class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 carouselPrincipal" src="imagens/hamburguer.jpeg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carouselPrincipal" src="imagens/pizza.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 carouselPrincipal" src="imagens/sushi.jpg" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>

<section id="cardapio" class="cardapio">
      <div class="container">
        <div class="section-cardapio ">
          <h2>Nosso Cardapio</h2>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#cardapio-pizzas">
              <h4>Pizzas</h4>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#cardapio-burguer">
              <h4>Hamburgueres</h4>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#cardapio-japa">
              <h4>Comida Japonesa</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane fade active show" id="cardapio-pizzas">
            <div class="tab-header text-center">
              <p>cardapio</p>
              <h3>Pizzas</h3>
            </div>

            <div class="row gy-5">
              <div class="col-lg-4 cardapio-item">
                <a href="#"><img src="imagens/PizzaCalabresa.png" class="cardapio-img img-fluid" alt=""></a>
                <h4>Pizza de Calabresa</h4>
                <p class="ingredientes">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="preco">
                  R$ 45,00
                </p>
              </div>

              <div class="col-lg-4 cardapio-item">
                <a href="#" ><img src="imagens/PizzaMussarela.png" class="cardapio-img img-fluid" alt=""></a>
                <h4>Pizza de Mussarela</h4>
                <p class="ingredientes">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="preco">
                  R$ 48,00
                </p>
              </div>

              <div class="col-lg-4 cardapio-item">
                <a href="#" ><img src="imagens/PizzaPortuguesa.png" class="cardapio-img img-fluid" alt=""></a>
                <h4>Pizza Portuguesa</h4>
                <p class="ingredientes">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="preco">
                  R$ 55,00
                </p>
              </div>

              <div class="col-lg-4 cardapio-item">
                <a href="#" ><img src="imagens/PizzaSiciliana.png" class="cardapio-img img-fluid" alt=""></a>
                <h4>Pizza Siciliana</h4>
                <p class="ingredientes">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="preco">
                 R$ 58,00
                </p>
              </div>

              <div class="col-lg-4 cardapio-item">
                <a href="#" ><img src="imagens/PizzaPortuguesa.png" class="cardapio-img img-fluid" alt=""></a>
                <h4>Pizza Portuguesa</h4>
                <p class="ingredientes">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="preco">
                  R$ 55,00
                </p>
              </div>

              <div class="col-lg-4 cardapio-item">
                <a href="#" ><img src="imagens/PizzaSiciliana.png" class="cardapio-img img-fluid" alt=""></a>
                <h4>Pizza Siciliana</h4>
                <p class="ingredientes">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="preco">
                 R$ 58,00
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

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


<footer id="footer" class="footer">
  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-geo-alt icon"></i>
        <div>
          <h4>Endereço</h4>
          <p>
          Avenida das Nações Unidas<br>
            São Paulo - SP<br>
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-telephone icon"></i>
        <div>
          <h4>Contato</h4>
          <p>
            <strong>Celular: </strong>(11)97070-7070<br>
            <strong>Email: </strong>alpha2go@hotmail.com<br>
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-clock icon"></i>
        <div>
          <h4>Horario de funcionamento</h4>
          <p>
            <strong>Segunda á Sabado: </strong>10:00hr - 23:00hr<br>
            Domingo: Fechado
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Nos siga nas redes sociais</h4>
        <div class="social-links d-flex">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      &copy; <?php echo date('Y') ?> Copyright <strong><span>Alpha2Go</span></strong>. Todos os direitos reservados
    </div>
  </div>
</footer>
</body>
</html>