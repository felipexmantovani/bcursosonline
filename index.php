<?php
  $namePage = 'Início';
  include 'includes/header.php';
?>

<div id="banner" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

  <!-- banner -->
  <div class="carousel-item active">
    <img src="image/b-informatica.jpg" alt="Banner 1" class="d-block w-100">
    <div class="carousel-caption d-md-block">
      <h2>Cursos de Informática</h2>
      <p>
        <a href="informatica.php" class="btn btn-success" role="button" title="Conheça"><i class="fas fa-search"></i>Conheça</a>
      </p>
    </div>
  </div> <!-- banner -->
  <!-- banner -->
  <div class="carousel-item">
    <img src="image/b-culinaria.jpg" alt="Banner 2" class="d-block w-100">
    <div class="carousel-caption d-md-block">
      <h2>Cursos de Culinária</h2>
      <p>
        <a href="culinaria.php" class="btn btn-success" role="button" title="Conheça"><i class="fas fa-search"></i>Conheça</a>
      </p>
    </div>
  </div> <!-- banner -->
  <!-- banner -->
  <div class="carousel-item">
    <img src="image/b-desenho.jpg" alt="Banner 2" class="d-block w-100">
    <div class="carousel-caption d-md-block">
      <h2>Cursos de Desenho</h2>
      <p>
        <a href="desenho.php" class="btn btn-success" role="button" title="Conheça"><i class="fas fa-search"></i>Conheça</a>
      </p>
    </div>
  </div> <!-- banner -->
  <!-- banner -->
  <div class="carousel-item">
    <img src="image/b-jardinagem.jpg" alt="Banner 2" class="d-block w-100">
    <div class="carousel-caption d-md-block">
      <h2>Cursos de Jardinagem</h2>
      <p>
        <a href="jardinagem.php" class="btn btn-success" role="button" title="Conheça"><i class="fas fa-search"></i>Conheça</a>
      </p>
    </div>
  </div> <!-- banner -->

  <a href="#banner" class="carousel-control-prev" data-slide="prev" role="button">
    <span class="carousel-control-prev-icon"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a href="#banner" class="carousel-control-next" data-slide="next" role="button">
    <span class="carousel-control-next-icon"></span>
    <span class="sr-only">Próximo</span>
  </a>

  </div>
</div> <!-- banner -->

<main>
  <section id="cursos" class="wow fadeIn">
    <h1 class="text-center">Conheça alguns cursos</h1>
    <p class="text-center">Faça seu curso onde estiver, apenas conectado à internet! Cursos disponíveis 24 horas por dia!</p>

    <div class="container">
      <div class="row">

        <div class="col col-sm-6 col-md-6 col-lg-3 col-12 wow fadeInLeft" data-wow-delay="0.1s">
          <div class="card">
            <img src="image/informatica1.jpg" alt="Hardware" class="card-img-top">
            <div class="card-body">
              <h2 class="card-title">Hardware</h2>
              <p>Velit occaecat eu non commodo consectetur consequat</p>
              <a href="#" class="btn btn-success">Ver curso</a>
            </div>
          </div>
        </div>

        <div class="col col-sm-6 col-md-6 col-lg-3 col-12 wow fadeInLeft" data-wow-delay="0.3s">
          <div class="card">
            <img src="image/culinaria1.jpg" alt="Costela Recheada" class="card-img-top">
            <div class="card-body">
              <h2 class="card-title">Costela Recheada</h2>
              <p>Nostrud dolore Lorem ad minim ea dolore non aute consectetur labore non</p>
              <a href="#" class="btn btn-success">Ver curso</a>
            </div>
          </div>
        </div>

        <div class="col col-sm-6 col-md-6 col-lg-3 col-12 wow fadeInLeft" data-wow-delay="0.5s">
          <div class="card">
            <img src="image/desenho1.jpg" alt="Caricatura" class="card-img-top">
            <div class="card-body">
              <h2 class="card-title">Caricatura</h2>
              <p>Esse duis exercitation ea ipsum mollit nulla sit ad</p>
              <a href="#" class="btn btn-success">Ver curso</a>
            </div>
          </div>
        </div>

        <div class="col col-sm-6 col-md-6 col-lg-3 col-12 wow fadeInLeft" data-wow-delay="0.7s">
          <div class="card">
            <img src="image/jardinagem1.jpg" alt="Jardim Inglês" class="card-img-top">
            <div class="card-body">
              <h2 class="card-title">Jardim Inglês</h2>
              <p>Adipisicing commodo mollit ex occaecat dolore proident ad proident nulla</p>
              <a href="#" class="btn btn-success">Ver curso</a>
            </div>
          </div>
        </div>

      </div> <!-- row -->
    </div> <!-- container -->
  </section> <!-- cursos -->

  <section id="depoimentos" class="text-center">
    <div class="container">
      <h1>Depoimentos</h1>
      <p>
        <i class="fas fa-quote-left"></i>
        Eu fiz dois cursos no BCursos online, foram ótimos cursos que melhoraram minha capacitação e abriu a porta do Mercado de Trabalho, até que eu cheguei na Microsoft e me tornei CEO. Recomendo fortemente.
      </p>
      <img class="rounded-circle" src="image/bill.jpg" alt="Bill Gates">
      <p>
        <strong target="_blank">Bill Gates</strong>
        <span>Microsoft</span>
      </p>
    </div> <!-- container -->
  </section>

  <section id="news" class="wow fadeIn">
    <div class="container">
      <h1 class="text-center">Receba Novidades</h1>
      <p class="text-center">Inscreva-se na nossa newsletter e receba todas as novidades do BCursos online:</p>

      <form action="" method="post">
        <div class="input-group input-group-lg">
          <input type="email" class="form-control" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail" required>
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-check"></i></button>
          </div>
        </div>
      </form>

    </div> <!-- container -->
  </section>
</main> <!-- main -->

<?php
  include 'includes/footer.php';
?>
