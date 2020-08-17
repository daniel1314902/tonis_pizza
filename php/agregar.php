<?php

$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$mensaje= $_POST['mensaje'];

include "conexion.php"

//INSERTAR REGISTRO
$accion= "INSERT INTO informacion (nombre,correo,telefono,direccion,mensaje) 
VALUES ('$nombre','$correo', '$telefono','$direccion','$mensaje')";
$consulta= mysql_query($conexion,$accion);

//VENTANA CONFIRMA SI SE GUARDO LA INFORMACION Y REGRESA ALA PAGINA DE FORMULARIO

         if($consulta!=null){
               print "<script>alert(\"Agregado exitosamente.\"); 
         	   window.location='../contacto.html';</script>";
         }
         else{
               print "<script>alert(\"No se pudo agregar.\"); 
         	   window.location='../contacto.html';</script>";

         }
?>