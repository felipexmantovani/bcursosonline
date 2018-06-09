<!DOCTYPE HTML>
<html>
<head>
  <title>BCursos Online - <?=$namePage?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">

  <link rel="shortcut icon" href="image/icon.png">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div class="container">

        <a class="navbar-brand" href="./" title="Página Inicial">
          <img class="img-fluid" src="image/logo.png" alt="BCursos Online">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link" title="Home">Home</a>
            </li>
            <li class="nav-item">
              <a href="sobre.php" class="nav-link" title="Sobre">Sobre</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" title="Cursos">Cursos</a>
              <div class="dropdown-menu">
                <a href="informatica.php" class="dropdown-item" title="Curso de Informática">Informática</a>
                <a href="culinaria.php" class="dropdown-item" title="Curso de Culinária">Culinária</a>
                <a href="desenho.php" class="dropdown-item" title="Curso de Desenho">Desenho</a>
                <a href="jardinagem.php" class="dropdown-item" title="Curso de Jardinagem">Jardinagem</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" title="Contato" data-toggle="modal" data-target="#modal-contato">Contato</a>
            </li>
          </ul>
        </div> <!-- menu -->

      </div> <!-- container -->
    </nav> <!-- nav -->
  </header> <!-- header -->
