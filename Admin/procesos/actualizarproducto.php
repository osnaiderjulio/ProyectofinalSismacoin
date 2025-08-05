<?php
require_once "../../clases/conexion.php";
require_once "../../productos/producto.php";
$obj = new producto();

$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$datos = array(
    $_POST['ID'],
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


echo $obj->editProducto($datos);

