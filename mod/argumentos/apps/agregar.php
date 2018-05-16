<?php

if(!empty($_POST)){
	if(isset($_POST["titulo"]) &&isset($_POST["contenido"]) &&isset($_POST["icono"]) ){
		$titulo = $_POST["titulo"];
		$contenido = $_POST["contenido"];
		$icono = $_POST["icono"];
		if($titulo!=""&& $contenido!=""&&$icono!=""){
			include "../../general/conexion.php";

			$sql = "insert into mex_argumentos(titulo,contenido,icono) values ('".$titulo."','".$contenido."','".$icono."')";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../index.php';</script>";

			}
		}
	}
}



?>
