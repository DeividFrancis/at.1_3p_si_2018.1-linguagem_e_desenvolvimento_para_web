<!DOCTYPE html>
<html>
<head>

  <!-- Import materialize off -->
  <link rel="stylesheet" href="lib/materialize/css/materialize.css" media="screen,projection">

  <!-- Impot My Css -->
  <link rel="stylesheet" href="lib/css/my-css.css">

  <!-- Import Google font -->
  <link href="https://fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="">
  <div class="nav-home">
  <div class="container">
    <ul class="menu-index">
      <li><a href="#sobre">Sobre</a></li>
      <li><a href="#atividades">Atividades</a></li>
      <li><a href="https://github.com/DeividFrancis/at.1_3p_si_2018.1-linguagem_e_desenvolvimento_para_web">GitHub</a></li>
    </ul>
  </div>
  </div>
  <main class="index">
    <div class="container-fundo">
      <div class="fundo"></div>
    <div class="parallax-container">
      <div class="parallax"><img src="images/fundo-code.png"></div>
    </div>
    <div class="container-logo">
      <div class="index-logo">
        <div class="sistema-index">Sistema</div>
        <div class="de-index">de</div>
        <div class="informacao-index">Informação</div>
      </div>
    </div>
    </div>
    <div class="row">
      <div class="container">
        <h1 id="sobre"class="header">Sobre</h1>
        <div class="divider"></div>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div  id="atividades"class="row gradient   space-1">
      <div class="container">
        <div class="col s12 m3">
          <a href="juros-simples-composto">
            <div class="card hoverable">
              <div class="card-image"><img src="images/juros.png" alt=""></div>
              <div class="card-content">Juros simples e composto</div>
            </div>
          </a>
        </div>
        <div class="col s12 m3">
          <a href="area-circulo-trapezio-losango">
            <div class="card hoverable">
              <div class="card-image"><img src="images/area.png" alt=""></div>
              <div class="card-content">Área do circulo, trapezio e losando</div>
            </div>
          </a>
        </div>
        <div class="col s12 m3">
          <a href="quantidade-de-numeros-primos-entre-dois-numeros">
            <div class="card hoverable">
              <div class="card-image"><img src="images/primos.png" alt=""></div>
              <div class="card-content">Números primos entre dois números</div>
            </div>
          </a>
        </div>
        <div class="col s12 m3">
          <a href="equacao-cubica">
            <div class="card hoverable">
              <div class="card-image"><img src="images/cubo.png" alt=""></div>
              <div class="card-content">Calculo da equação do 3 grau</div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <h3 class="header">Frameworks utilizadas</h3>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <div class="row">
      <div class="container">
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </main>
  <?php include 'views/_includes/footer.php'; ?>
