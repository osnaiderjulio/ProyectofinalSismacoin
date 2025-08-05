<?php
require_once "../clases/conexion.php";
require_once "../clases/usuario.php";
$obj=new usuario();
echo($obj->obtenDatosUsuario($_POST['id']));
?>