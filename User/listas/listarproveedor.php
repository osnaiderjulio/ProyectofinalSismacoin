<?php
session_start();
require_once "../../clases/conexion.php";
$c = new conectar();
$cx = $c->conexion();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lista proveedor</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/stylemenu.css">
</head>
<?php include("../vistas/header2.php"); ?>

<body>
  <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">Lista de proveedores</span></h1>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Cod_Proveedor </th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido1</th>
          <th scope="col">Apellido2</th>
          <th scope="col">correo</th>
          <th scope="col">Telefono</th>
          <th scope="col">empresa</th>
          <th scope="col">Estado</th>
          


        </tr>
      </thead>

      <tbody>
        <?php
        $sql = "SELECT *FROM proveedor ";
        $result = mysqli_query($cx, $sql);
        while ($ver = mysqli_fetch_row($result)) :
        ?>
          <tr>
            <td><?php echo $ver[0]; ?></td>
            <td><?php echo $ver[1]; ?></td>
            <td><?php echo $ver[2]; ?></td>
            <td><?php echo $ver[3]; ?></td>
            <td><?php echo $ver[4]; ?></td>
            <td><?php echo $ver[5]; ?></td>
            <td><?php echo $ver[6]; ?></td>
            <td><?php echo $ver[7]; ?></td>
            <td><?php echo $ver[8]; ?></td>


            
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>

</html>