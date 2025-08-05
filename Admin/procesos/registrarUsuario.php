<?php
require_once "../../clases/conexion.php";
require_once "../../clases/usuario.php";
$obj=new usuario();
$pass=($_POST['password']);
$datos=array(
$_POST['usuario'],
$pass,
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
$_POST['edad']
);



$validar= $obj->registrarUsuario($datos);

if($validar){

    echo "<script> alert('Datos ingresados correctamente');
        location.href = '../vistas/registrodeusuario.php';
       </script>";
    }

?>