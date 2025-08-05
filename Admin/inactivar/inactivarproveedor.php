<?php
require_once '../../clases/conexion.php'; 
session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/eliminar/estiloEliminarProveedor.css">
    <link rel="icon" href="../img/icono.png">
    <title>Eliminar</title>

 
</head>
<body>


<?php
require_once '../vistas/header.php';





if (isset($_POST['eliminar'])) {
    $eliminar = $_POST['eliminar'];
    $ID = $_GET['ID'];
    $obj = new conectar();
    $cx = $obj->conexion();

    if ($eliminar == 'SI') {

        $sql = "UPDATE proveedor SET estado = 'Inactivo' WHERE ID = '$ID'";
        $resultado = mysqli_query($cx, $sql);

        if ($resultado) {
            echo "<script> alert('El Proveedor ha sido inactivado satisfactoriamente');
            location.href = '../listas/listarproveedor.php';
            </script>";
        } else {
            echo "<script> alert('ERROR al inactivar al Proveedor');
            location.href = '../listas/listarproveedor.php';
            </script>";
        }
    }
}


echo "<center><Form class='form-registro' action='' method='POST'>";
echo "<center><p>¿Desea inactivar a este Proveedor?</p></center>";
echo "<center><input class='casillas' type='hidden' name='ID' value='$ID'></center>";
echo "<center><input class='casillas' class='edit' type='submit' name='eliminar' value='SI'></center><br>";
echo "<center><a href='../listas/listarproveedor.php'><input class='casillas' type='button' name='eliminar' value='NO'></a></center>";
echo "</form></center>";


?>
</body>
</html>
