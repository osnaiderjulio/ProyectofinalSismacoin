<?php
class pedido
{
    public function registrarPedido($datos)
    {
        $c = new conectar();
        $cx = $c->conexion();

        $sqlVenta = "INSERT INTO pedido (cod_pedido, id_cliente, fecha_pedido) VALUES ('$datos[0]', '$datos[1]', '$datos[2]')";
        $resultVenta = mysqli_query($cx, $sqlVenta);

        $ID_Pedido = mysqli_insert_id($cx);

        $sqlFactura = "INSERT INTO detallefactura (ID_Pedido, ID_Producto, Cantidad, Precio_Uni, Total) VALUES ('$ID_Pedido', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')";
        $resultFactura = mysqli_query($cx, $sqlFactura);

        if ($resultVenta && $resultFactura) {
            return true; 
        } else {
            echo "Error en la inserción en detallefactura: " . mysqli_error($cx);
            return false; 
        }
    }
}


