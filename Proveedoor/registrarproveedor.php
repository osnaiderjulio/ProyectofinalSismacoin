<?php
require_once "../clases/conexion.php";
require_once "./proveedor.php";
$obj=new Proveedor();

$datos=array(
$_POST['Cod_Proveedor'],
$_POST['Nombre'],
$_POST['Apellido1'],
$_POST['Apellido2'],
$_POST['correo'],
$_POST['Telefono'],
$_POST['empresa']
);


$validar= $obj->registrarproveedor($datos);

if($validar){

    echo "<script> alert('Datos ingresados correctamente');
        location.href = '../Admin/vistas/formularioproveedor.php';
       </script>";
    }

?>