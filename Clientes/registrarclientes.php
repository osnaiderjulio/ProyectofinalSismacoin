<?php
require_once "../clases/conexion.php";
require_once "./userclientes.php";
$obj=new userclientes();

$datos=array(
$_POST['identidad'],
$_POST['nombres'],
$_POST['papellido'],
$_POST['sapellido'],
$_POST['correo'],
$_POST['telefono'],
);


$validar= $obj->registrarclientes($datos);

if($validar){

    echo "<script> alert('Datos ingresados correctamente');
        location.href = '../Admin/vistas/formularioclientes.php';
       </script>";
    }

?>