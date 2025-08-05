<?php
require_once "../../clases/conexion.php";
require_once "../../Pedido/pedido.php";

$obj=new pedido();
$datos=array(
$_POST['cod_pedido'],
$_POST['id_cliente'],
$_POST['fecha_pedido'],
$_POST['ID_Producto'],
$_POST['Cantidad'],
$_POST['Precio_Uni'],
$_POST['Total']

);



$validar= $obj->registrarPedido($datos);

if($validar){

    echo "<script> alert('Datos ingresados correctamente');
        location.href = '../factura/factura.php';
       </script>";
    }

?>