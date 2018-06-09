<footer class="bg-dark">
  <div class="container">
    <div class="row">

      <div class="col text-center wow fadeInLeft">
        <i class="fas fa-map-marker-alt"></i>
        <p>Av. Brasil, 20 - Umuarama-PR</p>
      </div>

      <div class="col text-center wow fadeIn">
        <i class="fas fa-mobile-alt"></i>
        <p>(44) 0000-0000</p>
      </div>

      <div class="col text-center wow fadeInRight">
        <i class="fas fa-envelope"></i>
        <a href="mailto:tidinha@bcursos.com" title="E-mail para contato" class="d-block">tidinha@bcursos.com</a>
      </div>

    </div> <!-- row -->

    <hr>

    <p class="float-left">2018 - Todos os direito reservados</p>
    <ul class="float-right">
      <li>
        <a href="http://facebook.com" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a>
      </li>
      <li>
        <a href="http://twitter.com" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
      </li>
      <li>
        <a href="http://instagram.com" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
      </li>
    </ul>
  </div> <!-- container -->
</footer> <!-- footer -->

<div id="modal-contato" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="https://formspree.io/contato@felipemantovani.com.br" method="POST">
        <div class="modal-header">
          <h5>Contato</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">x</span>
          </button>
        </div> <!-- modal-header -->
        <div class="modal-body">
          <input class="form-control mb-3" type="text" name="nome" required placeholder="Seu nome">
          <input class="form-control mb-3" type="email" name="email" required placeholder="Seu e-mail">
          <textarea class="form-control mb-3" name="mensagem" rows="5" required placeholder="Sua mensagem"></textarea>
        </div> <!-- modal-body -->
        <div class="modal-footer">
          <button type="submit" title="Enviar" class="btn btn-success">Enviar</button>
        </div> <!-- modal-footer -->
      </form>
    </div>
  </div>
</div> <!-- modal -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
</body>
</html>
