<?php
class producto {
    public function registrarproductos($datos)
    {
        $c = new conectar();
        $cx = $c->conexion();

        $cod_producto = mysqli_real_escape_string($cx, $datos[0]);
        $sql_verificacion = "SELECT Cod_Producto FROM productos WHERE Cod_Producto = '$cod_producto'";
        $resultado_verificacion = mysqli_query($cx, $sql_verificacion);

        if (mysqli_num_rows($resultado_verificacion) > 0) {
            return false;
        }

        $sql = "INSERT INTO productos (Cod_Producto,imagen,producto,Valor_Unitario,fechaIng,fechaVen,categoria,empresa,existencia,Cod_Proveedor, estado)
                VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','Activo')";
 if (mysqli_query($cx, $sql)) {
    return "Producto registrado con éxito.";
} else {
    return "Error al registrar el Producto. Por favor, intenta de nuevo.";
            }
     }


     public function editProducto($datos){
        $obj = new conectar();
    $cx = $obj->conexion();

    $sql = "UPDATE productos SET Cod_Producto='$datos[1]',imagen='$datos[2]', producto='$datos[3]', Valor_Unitario='$datos[4]', 
    fechaIng='$datos[5]', fechaVen='$datos[6]',categoria='$datos[7]',empresa='$datos[8]',existencia='$datos[9]',Cod_Proveedor='$datos[10]',estado='$datos[11]' WHERE ID='$datos[0]'";

$consult=mysqli_query($cx, $sql);

if ($consult>0) {
    echo "<script>
    alert('Datos actualizados correctamente.');
    location.href='../../listas/listaProducto.php';</script>";

    exit();
} else {
    echo "<script>alert('Error al actualizar datos: " . mysqli_error($cx) . "');</script>";
}
}
}


