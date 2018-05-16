<?php
  include '../general/InnercssLibraries.php';
?>
<link rel="stylesheet" href="css/index.css">
<title>Iniciar Sesión</title>
</head>
<body>
  <?php include '../general/InnerNavbar.php' ?>
<div class="container px-5 bordered mt-2" style="padding-top: 10%; padding-bottom: 10%;">
  <div class="row">
    <h1>Iniciar sesión</h1>
    <hr/>

    <form action="checklogin.php" method="post" >
    <label>Nombre Usuario</label><br>
    <input  class="form-control" name="username" type="text" id="username" required>
    <br><br>

    <label>Password</label><br>
    <input class="form-control" name="password" type="password" id="password" required>
    <br><br>
    <input class="btn btn-primary" type="submit" name="Submit" value="Ingresar">
    </form>
    <hr />
  </div>
</div>


  <?php include '../general/InnerFooter.php' ?>
