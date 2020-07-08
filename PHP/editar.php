<?php
require 'conexion.php';

extract($_POST);

$editar=$con->query("UPDATE registro SET ins='50', nombre='$nombre', apellidos='$apellidos', correo='$correo', direccion='$direccion', 
nacionalidad='$nacionalidad', cedula='$cedula', idc='$idc' WHERE idreg='$idreg'");

if($editar == true){
    header("location:../registro.php");
}