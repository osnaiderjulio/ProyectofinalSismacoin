<?php
session_start();
require_once "../../clases/conexion.php";
$c = new conectar();
$cx = $c->conexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylefactura.css">
    <title>Detalles de Factura</title>
</head>
<?php include("../vistas/header.php"); ?>

<body>
    <h1>Detalles de Factura</h1>

    <?php
    // Conectarse a la base de datos
    $c = new conectar();
    $cx = $c->conexion();

    // Consulta SQL para obtener los detalles de la factura con información del cliente y el producto
    $sql = "SELECT * FROM detallefactura,productos, clientes,pedido where detallefactura.ID_Pedido=pedido.ID_pedido AND detallefactura.ID_Producto=productos.ID and pedido.id_cliente=clientes.Cod_clientes";
    $result = mysqli_query($cx, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1">
                <tr>
                    <th>ID_Pedido</th>
                    <th>ID_Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                    <th>Cliente</th>
                    <th>Apellido1</th>
                    <th>Apellido2</th>
                    <th>Producto</th>
                </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['ID_Pedido'] . '</td>
                    <td>' . $row['ID_Producto'] . '</td>
                    <td>' . $row['Cantidad'] . '</td>
                    <td>' . $row['Precio_Uni'] . '</td>
                    <td>' . $row['Total'] . '</td>
                    <td>' . $row['Nombres'] . '</td>
                    <td>' . $row['apellido1'] . '</td>
                    <td>' . $row['apellido2'] . '</td>
                    <td>' . $row['producto'] . '</td>
                  </tr>';
        }

        echo '</table>';
    } else {
        echo 'No hay detalles de factura disponibles.';
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($cx);
    ?>
</body>
</html>
