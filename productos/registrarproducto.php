<?php
session_start();
error_reporting();
require_once "../clases/conexion.php";
require_once "../productos/producto.php";

$obj = new producto();

$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$datos = array(
    $_POST['Cod_Producto'],
    $imagen,
    $_POST['producto'],
    $_POST['Valor_Unitario'],
    $_POST['fechaIng'],
    $_POST['fechaVen'],
    $_POST['categoria'],
    $_POST['empresa'],
    $_POST['existencia'],
    $_POST['Cod_Proveedor']

);

$resultado = $obj->registrarproductos($datos);

if ($resultado == true) {
    echo "<script> alert('Datos ingresados correctamente'); 
    location.href = '../Admin/vistas/formularioproductos.php'; </script>";
} elseif ($resultado == false) {
    echo "<script> alert('Error: El código de producto ya existe');
     location.href = '../Admin/vistas/formularioproductos.php'; </script>";
} else {
    echo "<script> alert('Error al ingresar Datos Datos'); 
    location.href = '../Admin/vistas/formularioproductos.php'; </script>";
}
?>