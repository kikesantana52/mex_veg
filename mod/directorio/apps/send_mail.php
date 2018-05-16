<?php

$cuerpo = "Buen día Nicolas, \n\n El día de hoy ".$_POST["nombre"].
          " se comunicó para formar parte del directorio de 'México Vegano'\n".
          "Datos: \n \t Telefono: ".$_POST["tel"]."\n\t Correo: ".$_POST["email"].
          "\n\n\n Te recomiendo ponerte en contacto lo antes posible \n\n Saludos.";
mail("kikesantana52@gmail.com","NUEVO PROSPECTO",$cuerpo);
header('Location: /mexicoVeganoTemp/mod/directorio/')
 ?>
