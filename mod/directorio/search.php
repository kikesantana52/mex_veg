<?php
  include '../general/InnercssLibraries.php';
?>
<link rel="stylesheet" href="css/index.css">
<title>Directorio</title>
</head>
<body>

<?php include '../general/InnerNavbar.php' ?>

  <section id="header_dir">
    <div class="dk-overlay py-5">
      <div class="text-white">
        <h1>Directorio</h1>
        <p>El veganismo nunca fue más simple, encuentra productos y servicios para veganos.</p>
      </div>
    </div>
  </section>
  <?php include 'apps/listar.php' ?>
  <div class="row  text-center py-5">
      <div class="container bg-vegan text-white p-5">
        <h1 class="display-4">¡Súmate!</h1>
        <p class="lead">Al mejor recopilado de negocios con productos veganos.</p>
        <button class="btn btn-lila btn-block" data-toggle="modal" data-target="#send_mail_modal">¡Vamos! <i class="fa fa-child"></i></button>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="send_mail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-vegan text-white">
      <h5 class="modal-title" id="exampleModalLabel">Unete - dejanos a continuación tus datos.</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="apps/send_mail.php" method="GET">
        <div class="form-group">
          <label for="nombre">Nombre de la empresa</label>
          <input type="nombre" class="form-control" id="nombre" name="nombre" aria-describedby="nameHelp" placeholder=" México Vegano">
        </div>
        <div class="form-group">
          <label for="email">Correo electronico</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder=" atencion@miempresa.com">
          <small id="emailHelp" class="form-text text-muted">Nunca divulgaremos tu correo con nadie más.</small>
        </div>
        <div class="form-group">
          <label for="tel">Telefono</label>
          <input type="text" class="form-control" id="tel" name="tel" aria-describedby="Helptel" placeholder=" 33-1986-2225">
          <small id="telHelp" class="form-text text-muted">Nunca divulgaremos tu telefono con nadie más.</small>
        </div>
        <div class="container form-group form-check">
          <input type="checkbox" class="form-check-input" id="checkAgreement">
          <label class="form-check-label blockquote-footer" for="checkAgreement">Acepto y permito que "México Vegano" se comunique conmigo o a mi empresa con los datos antes dados.</label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar datos</button>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


    <?php include '../general/InnerFooter.php' ?>
    <script src="../../js/directorio/main.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEc-sS6o-kp6UAp02sROZyir2JH_z7lcE&callback=initMap">
    </script>

</body>
</html>
