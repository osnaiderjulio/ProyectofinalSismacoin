<?php
session_start();
require_once "../clases/conexion.php";
require_once "../clases/usuario.php";
$obj = new usuario();

$datos = array(
    $_POST['usuario'],
    $_POST['password']

);

echo $obj->loginUser($datos);


//if($obj->loginUser($datos)==1)
//{
//header("Location :./ProyectofinalSismaconin/menu.php");
//}
