<?php
  include '../general/InnercssLibraries.php';
?>
<link rel="stylesheet" href="css/index.css">
<title>Argumentos</title>
</head>
<body>

<?php include '../general/InnerNavbar.php' ?>
  <?php include 'apps/listar.php'; ?>

<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
  <!-- Modal add -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-vegan text-white">
          <h5 class="modal-title" id="addModalLabel">Agregar argumento</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form role="form" method="post" action="apps/agregar.php">
        <div class="modal-body">
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" name="titulo" required>
            </div>
            <div class="form-group">
              <label for="contenido">Contenido</label>
              <textarea class="form-control" style="resize:none"rows="10"  name="contenido" required></textarea>
            </div>
            <div class="form-group">
              <label for="icono">Icono</label>
              <button type="button" class="btn btn-lila text-white mb-1">Subir</button>
              <input type="text" class="form-control" name="icono" >
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-vegan">Agregar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal update -->
  <div class="modal fade" id="updModal" tabindex="-1" role="dialog" aria-labelledby="updModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-lila text-white">
          <h5 class="modal-title" id="updModalLabel">Modificar argumento</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form role="form" method="post" action="apps/actualizar.php">
        <div class="modal-body">
            <div class="form-group">
              <label for="id">Id</label>
              <input type="text" id="idToUpdate" class="form-control" name="id" readonly>
            </div>
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" id="titleToUpdate" class="form-control" name="titulo" required>
            </div>
            <div class="form-group">
              <label for="contenido">Contenido</label>
              <input type="text" id="contentToUpdate" class="form-control"  name="contenido" required>
            </div>
            <div class="form-group">
              <label for="icono">Icono</label>
              <input type="text" id="iconToUpdate" class="form-control" name="icono" >
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-lila">Modificar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>

  <?php include '../general/InnerFooter.php' ?>
  <script src="../../js/argumentos/main.js"></script>
