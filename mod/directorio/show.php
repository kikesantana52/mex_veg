<?php include '../general/InnercssLibraries.php'; ?>
<?php include "../general/conexion.php";
$sql1= "SELECT cliente.nombre,cliente.slogan,cliente.domicilio,municipio.municipio, estado.estado, cliente.telefono,cliente.web, cliente.horarios,categoria.tipo,cliente.fb,cliente.twitter  FROM mex_clientes as cliente, mex_municipios as municipio, mex_estados as estado,mex_categorias as categoria WHERE cliente.id = '".$_POST['id']."' AND cliente.municipio = municipio.id AND cliente.estado = estado.id AND categoria.id = cliente.categoria" ;
$query = $con->query($sql1);
$r=$query->fetch_array();
?>
<link rel="stylesheet" href="css/index.css">
<title>Empresa - <?php echo $r["nombre"]; ?></title>
</head>
<body>
  <?php include '../general/InnerNavbar.php' ?>
  <div class="container p-5">
    <img src="../../img/empresas/<?php echo $_POST['id']; ?>/<?php echo $_POST['id'].".jpg"; ?>" class="img-fluid pb-3">
    <h1><?php echo $r["nombre"] ?></h1>
    <h4 class="text-muted"><?php echo $r["slogan"] ?></h4>
    <hr>
    <h6 class="text-muted"><strong><i class="fa fa-map"></i> Domicilio: </strong><?php echo $r["domicilio"]; echo ", ".$r["municipio"]; echo ", ".$r["estado"]; ?></h6>
    <hr>
    <h6 class="text-muted"><strong><i class="fa fa-phone"></i> Telefono: </strong><?php echo $r["telefono"] ?></h6>
    <hr>
    <h6 class="text-muted"><strong><i class="fa fa-clock-o"></i> Horarios: </strong><?php echo $r["horarios"] ?></h6>
    <hr>
    <h6 class="text-muted">

      <strong>
        <?php switch ($r["tipo"]) {
          case 'Restaurante':
            echo "<i class=\"fa fa-cutlery\"></i>";
          break;
          case 'Tienda de balsamos':
            echo "<i class=\"fa fa-shopping-basket\"></i>";
          break;
          case 'Cosmeticos':
            echo "<i class=\"fa fa-star-half-empty\"></i>";
          break;
          case 'Vida en general':
            echo "<i class=\"fa fa-male\"></i>";
          break;
          case 'Cultivos en casa':
            echo "<i class=\"fa fa-leaf\"></i>";
          break;
        } ?>
       Categoría:
     </strong><?php echo $r["tipo"] ?></h6>
     <hr>
     <h6 class="text-muted"><strong><i class="fa fa-facebook"></i> Facebook: </strong><?php echo $r["fb"] ?></h6>
     <hr>
     <h6 class="text-muted"><strong><i class="fa fa-twitter"></i> Twitter: </strong><?php echo $r["twitter"] ?></h6>
     <hr>
     <h6 class="text-muted"><strong><i class="fa fa-globe"></i> Página web: </strong><?php echo $r["web"] ?></h6>
  </div>

  <?php include '../general/InnerFooter.php' ?>
  <script src="../../js/directorio/main.js"></script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEc-sS6o-kp6UAp02sROZyir2JH_z7lcE&callback=initMap">
  </script>

</body>
</html>
