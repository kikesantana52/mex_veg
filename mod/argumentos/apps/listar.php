
<section id="argumentos_init">
		<div class="dk-overlay">
			<div class="text-white y-mid">
				<h1>Argumentos</h1>
				<p>En este apartado se expone conocimiento que descubra el razonamiento del veganismo e información para facilitar esta transición ética.</p>
			</div>
		</div>

</section>

<?php
include "../general/conexion.php";
$user_id=null;
$sql1= "select * from mex_argumentos";
$query = $con->query($sql1);
?>
<section id="argumentos">
	<div class="container">
		<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
		<div class="row py-3">
				<a class="btn btn-outline-lila mx-auto" data-toggle="modal" href="#addModal" >Agregar</a>
		</div>
	<?php } ?>

<?php if($query->num_rows>0): ?>

		<?php while ($r=$query->fetch_array()):?>
				<div class="row py-2">
					<div class="col-md-2 col-sm-12">
						<img src="<?php echo $r["icono"]; ?>" alt="" class="img-fluid py-2">
					</div>
					<div class="col-md-8 col-xs-12 text-center v-align">
						<h1><?php echo $r["titulo"]; ?></h1>
						<p id="text-<?php echo $r["id"]; ?>"  class="text-compressed">
							<?php echo $r["contenido"]; ?>
						</p>
						<button class="btn btn-block btn-vegan collapser" data-target-text="text-<?php echo $r["id"]; ?>">Leer más</button>
					</div>
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
					<div class="col-md-2 col-sm-12">
						<form class="" action="apps/eliminar.php" method="GET">
							<input type="text" name="id" id="id" hidden value="<?php echo $r["id"]; ?>">
							<button type="submit" class="btn btn-danger btn-block">Eliminar</button>
						</form>
						<a href="#updModal" class="btn btn-info btn-block openUpdModal" data-toggle="modal" data-idComment="<?php echo $r['id']; ?>">Modificar</a>
					</div>
				<?php } ?>
				</div>
				<hr>
		<?php endwhile; ?>

  <?php else:?>
		<div class="py-5">
			<p class="alert alert-warning">No hay argumentos</p>
		</div>

	<?php endif;?>
</div>
</section>
