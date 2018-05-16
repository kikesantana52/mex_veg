<?php
  $host="192.185.4.142";
  $user="nico_mex";
  $password="mexico123";
  $db="nico_mex_veg";
  $con = new mysqli($host,$user,$password,$db);
  if ($con->connect_error) {
   die("La conexion falló: " . $con->connect_error);
  }
  $con->set_charset("utf8")
?>
