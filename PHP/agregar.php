<?php
require 'conexion.php';

extract($_POST);

$agregar=$con->query("INSERT INTO registro
                        VALUES ('','50','$nombre', '$apellidos', '$correo', '$direccion', '$nacionalidad', '$cedula', '$idc') ");

$idreg=mysqli_insert_id($con);

for ($i=0; $i < count($idt); $i++) { 
    $prefactura=$con->query("INSERT INTO prefactura VALUES ('','$idreg','$idt[$i]')");
}

if($prefactura == true){
    header("location:../registro.php");
}
