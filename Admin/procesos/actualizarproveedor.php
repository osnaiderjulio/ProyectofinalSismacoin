<?php
require_once "../../clases/conexion.php";
require_once "../../Proveedoor/proveedor.php";

$obj=new proveedor();
$datos=array(
$_POST['ID'],
$_POST['Cod_Proveedor'],
$_POST['Nombre'],
$_POST['Apellido1'],
$_POST['Apellido2'],
$_POST['correo'],
$_POST['Telefono'],
$_POST['empresa'],
$_POST['estado']


);
echo $obj->actualizarproveedor($datos);

