<?php
  include '../general/InnercssLibraries.php';
?>

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

  <div id="main_dir">
    <div class="container-fluid">
      <div class="row">
        <!-- LADO DERECHO, DONDE ESTA LA CAJA DE FILTRO -->
        <div class="col-12">
          <section id="filtros" class="py-3 fixed-right">
            <div class="container">
              <div class="row justify-content-center">
                <div id="caja_filtro" class="card text-white bg-vegan mb-3">
                  <form action="search.php" method="GET">
                    <div class="card-header">Filtros <p>Si no deseas filtrar nada, deja todo en blanco</p></div>
                    <div class="card-body">
                        <?php include "../general/conexion.php"; ?>
                      <div class="input-group mb-3">
                        <label class="input-group-addon">Estado</label>
                        <select class="custom-select filter_width_100" name="estado" id="select_estado">
                          <option value=""></option>
                          <?php
                            $sql1= "select * from mex_estados";
                            $query = $con->query($sql1);
                            while ($r=$query->fetch_array()):
                              print "<option  value='".$r['id']."'>".$r['estado']."</option>";
                            endwhile;
                          ?>
                        </select>
                      </div>
                      <div class="input-group mb-3">
                        <label class="input-group-addon">Municipio</label>
                        <select class="custom-select filter_width_100" name="municipio" id="select_municipio">

                        </select>
                      </div>
                      <div class="input-group mb-3">
                        <label class="input-group-addon">Categoría</label>
                        <select class="custom-select filter_width_100" id="select_categoria" name="categoria">
                          <option value=""></option>
                        <?php
                          $sql1= "select * from mex_categorias";
                          $query = $con->query($sql1);
                          while ($r=$query->fetch_array()):
                            print "<option  value='".$r['id']."'>".$r['tipo']."</option>";
                          endwhile;
                         ?>
                        </select>
                      </div>
                      <!-- <div class="input-group mb-3">
                          <label class="input-group-addon">Dirección</label>
                        <input type="text" class="forma-extendida form-control ">
                      </div>
                        <div id="map"></div> -->

                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-lila btn-block">Filtrar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </section>
        </div>
      </div>
    </div>
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
              <input type="nombre" class="form-control" id="nombre" name="nombre" aria-describedby="nameHelp" placeholder="Ej. México Vegano">
            </div>
            <div class="form-group">
              <label for="email">Correo electronico</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ej. atencion@miempresa.com">
              <small id="emailHelp" class="form-text text-muted">Nunca divulgaremos tu correo con nadie más.</small>
            </div>
            <div class="form-group">
              <label for="tel">Telefono</label>
              <input type="text" class="form-control" id="tel" name="tel" aria-describedby="Helptel" placeholder="Ej. 33-1986-2225">
              <small id="telHelp" class="form-text text-muted">Nunca divulgaremos tu correo con nadie más.</small>
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

    </script>

</body>
</html>
