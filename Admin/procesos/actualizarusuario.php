<?php
require_once "../../clases/conexion.php";
require_once "../../clases/usuario.php";

$obj=new usuario();
$datos=array(
$_POST['id'],
$_POST['usuario'],
$_POST['password'],
$_POST['IDcargo'],
$_POST['pnombre'],
$_POST['snombre'],
$_POST['papellido'],
$_POST['sapellido'],
$_POST['telefono'],
$_POST['correo'],
$_POST['pais'],
$_POST['ciudad'],
$_POST['genero'],
$_POST['edad'],
$_POST['estado']

);
echo $obj->actualizarusuario($datos);

