
<nav class="navbar navbar-expand-lg navbar-dark bg-vegan fixed-top py-0 ">
  <div class="container">
    <a class="navbar-brand py-0" href="index.php"><img class="white-box" src="img/LOGO_II.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="mod/argumentos/index.php">Argumentos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mod/directorio/index.php">Directorio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mod/recetario/index.php">Recetario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mod/contacto/index.php">Contacto</a>
        </li>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
          <li class="nav-item">
            <a class="nav-link" href="mod/phpLogin/cerrarSesion.php"><i class="fa fa-user"></i> Cerrar sesión</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
