<?php

  $filter = "";
  $filter .= (isset($_GET['estado']) && $_GET['estado']!="") ? " AND estados.id = '".$_GET['estado']."'" : "" ;
  $filter .= (isset($_GET['categoria']) && $_GET['categoria']!="") ? " AND categorias.id = '".$_GET['categoria']."'" : "" ;
  $filter .= (isset($_GET['municipio']) && $_GET['municipio']!="") ? " AND municipios.id = '".$_GET['municipio']."'" : "" ;

  include "../general/conexion.php";
  $user_id=null;
  $sql1= "SELECT clientes.id, clientes.nombre, clientes.slogan,clientes.domicilio, clientes.telefono,clientes.web,clientes.fb,clientes.twitter FROM mex_clientes as clientes, mex_estados as estados, mex_categorias as categorias, mex_municipios as municipios ".
          "WHERE estados.id = clientes.estado AND categorias.id = clientes.categoria AND municipios.id = clientes.municipio ".$filter;
  $query = $con->query($sql1);
?>


  <div id="main_dir">
    <div class="container-fluid">
      <div class="d-md-flex flex-row-reverse">
        <!-- LADO DERECHO, DONDE ESTA LA CAJA DE FILTRO -->
        <div class="col-sm-12 col-md-5 col-lg-4">
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
          <section id="filtros" class="py-3 fixed-right">
            <div class="container">
              <div class="row justify-content-center">
                <div id="caja_filtro" class="card text-white bg-vegan mb-3">
                  <div class="card-header">Filtros</div>
                  <div class="card-body">

                    <div class="input-group mb-3">
                      <label class="input-group-addon">Estado</label>
                      <select class="custom-select filter_width_100" name="estado" id="select_estado">
                        <option value=""></option>
                        <?php
                          $sql2= "select * from mex_estados";
                          $query2 = $con->query($sql2);
                          while ($r2=$query2->fetch_array()):
                            if (isset($_GET['estado']) && $r2['id']==$_GET['estado']) {
                              print "<option  value='".$r2['id']."' selected>".$r2['estado']."</option>";
                            }else{
                              print "<option  value='".$r2['id']."'>".$r2['estado']."</option>";
                            }

                          endwhile;
                        ?>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                      <label class="input-group-addon">Municipio</label>
                      <select class="custom-select filter_width_100" id="select_municipio" name="municipio">
                        <option value=""></option>
                        <?php if (isset($_GET['municipio'])):
                          print "<option  value='".$r2['id']."' selected>".$r2['estado']."</option>";
                        endif;
                        ?>
                      </select>
                    </div>

                    <div class="input-group mb-3">
                      <label class="input-group-addon">Categoría</label>
                      <select class="custom-select filter_width_100" id="select_categoria" name="categoria">
                        <option value=""></option>
                      <?php
                        $sqlcategory= "select * from mex_categorias";
                        $querycategory = $con->query($sqlcategory);
                        while ($rcategory=$querycategory->fetch_array()):
                          if (isset($_GET['categoria']) && $rcategory['id']==$_GET['categoria']) {
                            print "<option  value='".$rcategory['id']."' selected>".$rcategory['tipo']."</option>";
                          }else{
                            print "<option  value='".$rcategory['id']."'>".$rcategory['tipo']."</option>";
                          }

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
                    <button type="submit" class="btn btn-lila btn-block">Filtrar</a>
                  </div>
                </div>
              </div>
            </div>

          </section>
          </form>
        </div>
        <div class="col-sm-12 col-md-7 col-lg-8">
          <!-- FOR EACH REGISTRO EN LA BASE DE DATOS -->
          <?php if($query->num_rows>0): ?>
          <?php while ($r=$query->fetch_array()): ?>
            <div class="container">
              <div class="row mt-2">
                <div class="bordered px-4 py-2 w-100">
                  <div class="row">
                    <div class="col-sm-12">
                      <img src="../../img/empresas/<?php echo $r["id"] ?>/<?php echo $r["id"] ?>.jpg" class="img-fluid" width="80%">
                    </div>
                    <div class="col-sm-12"><h1 class="text-left"><?php echo $r["nombre"]; ?></h1></div>
                  </div>
                  <p class="text-muted"><?php echo $r["slogan"]; ?></p>
                  <p><strong>Domicilio:</strong> <?php echo $r["domicilio"] ?> </p>
                    <a href="http://<?php echo $r["web"]; ?>" class="client-link btn btn-outline-lila ">Página web <i class="fa fa-globe"></i></a>
                    <button class="client-link btn btn-outline-vegan" data-placement="top" data-toggle="popover" title="Telefono" data-content="<?php echo $r["telefono"]; ?>">Llamar <i class="fa fa-phone"></i></button>
                    <a href="http://<?php echo $r["fb"]; ?>" class="btn btn-outline-primary"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="http://<?php echo $r["twitter"]; ?>" class="btn btn-outline-primary"><i class="fa fa-twitter"></i> Twitter</a>
                    <form action="show.php" method="POST" class="d-inline">
                      <input type="text" name="id" value="<?php echo $r["id"]?>" hidden>
                      <button type="submit" class="client-link btn btn-outline-warning">Más informacion <i class="fa fa-plus"></i></button>
                  </form>

                </div>
              </div>
            </div>
        <?php endwhile; ?>

      <?php else:?>
        <div class="py-5">
          <p class="alert alert-warning">No hay clientes que coincidan con tu busqueda</p>
        </div>

      <?php endif;?>
        </div>
      </div>
    </div>

    </div>
