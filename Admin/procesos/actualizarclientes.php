<?php
require_once "../../clases/conexion.php";
require_once "../../Clientes/userclientes.php";

$obj=new userclientes();
$datos=array(
$_POST['Cod_clientes'],
$_POST['identidad'],
$_POST['nombres'],
$_POST['papellido'],
$_POST['sapellido'],
$_POST['correo'],
$_POST['telefono'],
$_POST['estado']

);
echo $obj->ActualizarClientes($datos);

