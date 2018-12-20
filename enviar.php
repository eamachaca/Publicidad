<?php
require "conexion.php";
?>

<?php  
  $destino = "eamachaca@hotmail.com";
  $nombre = $_POST["NOMBRE"];
  $correo = $_POST["CORREO"];
  $telefono = $_POST["TELEFONO"];
  $mensaje = $_POST["MENSAJE"];

  $contenido= "Nombre:" . $nombre . "\nCorreo:" .$correo. "\nTelefono:" . $telefono . "\nMensaje:" .$mensaje;

  mail($destino,"Contacto",$contenido);

  header("Location:index.html");

?>