<?php
require_once "../../clases/conexion.php";
date_default_timezone_set('America/bogota');
session_start();
$obj = new conectar();
$cx = $obj->conexion();


$user = $_SESSION['usuario'];
$sql = "SELECT  IDcargo FROM login WHERE usuario='$user'";
$resultado = mysqli_query($cx, $sql);
$row = mysqli_fetch_assoc($resultado);

if ($row['IDcargo'] !=2) {
    echo "<script> alert('Acceso denegado. Debe ser usuario para acceder a esta página.');
    location.href = '../../index.php';
    </script>";
    die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logoinventario.png">
    <link rel="stylesheet" href="../vistas/stylemenu.css">

    <title>sismaconin</title>
</head>

<body>
    <?php include "header2.php"; ?>
    <section id="container">
        <h1>Bienvenido al sistema</h1>
    </section>

</body>

</html>