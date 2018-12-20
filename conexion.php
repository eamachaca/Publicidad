<?php

//$mysqli= new mysqli("mysql.hostinger.es","u575306042_root","dayana","u575306042_soft1");
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

$mysqli= new mysqli("carla","carla","","jasoft");

if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}



?>