<?php
require_once "../clases/conexion.php";
require_once "../productos/producto.php";

$obj=new producto();
$datos=array(
$_POST['Cod_clientes'],
$_POST['identidad'],
$_POST['nombres'],
$_POST['papellido'],
$_POST['sapellido'],
$_POST['correo'],
$_POST['telefono'],


);
echo $obj->actualizarproductos($datos);

