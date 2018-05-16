<?php

if(!empty($_GET)){
			include "../../general/conexion.php";

			$sql = "DELETE FROM mex_argumentos WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../index.php';</script>";

			}
}

?>
