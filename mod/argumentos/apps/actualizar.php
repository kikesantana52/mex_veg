<?php

if(!empty($_POST)){
	if(isset($_POST["id"]) &&isset($_POST["titulo"]) &&isset($_POST["contenido"]) &&isset($_POST["icono"])){
		if($_POST["titulo"]!=""&& $_POST["contenido"]!=""&&$_POST["icono"]!=""){
			include "../../general/conexion.php";

			$sql = "update mex_argumentos set titulo=\"$_POST[titulo]\", contenido=\"$_POST[contenido]\", icono=\"$_POST[icono]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../index.php';</script>";

			}
		}
	}
}



?>
