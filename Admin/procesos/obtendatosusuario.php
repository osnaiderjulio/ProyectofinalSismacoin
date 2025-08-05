<?php
require_once "../../conexion.php";
require_once "../../clases/usuario.php";
$obj=new usuario();
echo($obj->obtenDatosUsuario($_POST['id']));
?>