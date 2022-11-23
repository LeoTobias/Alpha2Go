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
  <link href="/css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/css/aos/aos.css" rel="stylesheet">

  <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('site/css/carrinho.css') }}" rel="stylesheet">
  <link href="{{ asset('site/css/login.css') }}" rel="stylesheet">
  <link href="{{ asset('site/css/sucesso.css') }}" rel="stylesheet">
  <link href="{{ asset('site/css/checkout.css') }}" rel="stylesheet">



  <script src="{{ asset('site/js/script.js') }}"></script>

  <script src="/css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/css/aos/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <title>Alpha2Go</title>
</head>

<body>

  <header id="header" class="header navbar fixed-top d-flex align-items-center col">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="{{ asset('site/imagens/logoAlpha.png') }}" alt="">
        <h1>Alpha2Go<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="{{ url('/.#cardapio') }}">Cardapio</a></li>
          <li><a href="{{ url('/.#contato') }}">Contato</a></li>
        </ul>
      </nav>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="btn-book-a-table" href="{{ url('login') }}"><img id="carrinho" src="{{ asset('site/imagens/user.png') }}"></a></li>
          <li><a class="btn-book-a-table" href="{{ url('carrinho') }}"><img id="carrinho" src="{{ asset('site/imagens/carrinho.png') }}"></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="conteudo">
    @yield('conteudo')
  </div>

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