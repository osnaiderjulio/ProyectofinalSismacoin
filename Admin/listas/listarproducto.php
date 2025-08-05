<?php
session_start();
error_reporting(0);

require_once "../../clases/conexion.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lista producto</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/stylemenu.css">
</head>
<?php include("../vistas/header.php"); ?>

<body>
  <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">Lista producto</span></h1>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Cod_Producto</th>
          <th scope="col">imagen</th>
          <th scope="col">producto</th>
          <th scope="col">Valor_Unitario</th>
          <th scope="col">fechaIng</th>
          <th scope="col">fechaVen</th>
          <th scope="col">categoria</th>
          <th scope="col">empresa</th>
          <th scope="col">existencia</th>
          <th scope="col">Cod_Proveedor</th>
          <th scope="col">estado</th>
          

        </tr>
      </thead>

      <tbody>
      <?php

      
$c = new conectar();
$cx = $c->conexion();



$sql = "SELECT *FROM productos";
$result = mysqli_query($cx, $sql);
while ($ver = mysqli_fetch_row($result)) :
?>
          <tr>
            <td><?php echo $ver[0]; ?></td>
            <td><?php echo $ver[1]; ?></td>
            <td  ><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($ver[2]) ; ?>"></td>
            <td><?php echo $ver[3]; ?></td>
            <td><?php echo $ver[4]; ?></td>
            <td><?php echo $ver[5]; ?></td>
            <td><?php echo $ver[6]; ?></td>
            <td><?php echo $ver[7]; ?></td>
            <td><?php echo $ver[8]; ?></td>
            <td><?php echo $ver[9]; ?></td>
            <td><?php echo $ver[10]; ?></td>
            <td><?php echo $ver[11]; ?></td>
            <td style="text-align:center"><a href="../editar/editarProducto.php?ID=<?php echo $ver[0];?>"> <button type="button" class="btn btn-info"><i class="bi bi-pencil"></i></button></a></td>
            <td style="text-align:center"><a href="../inactivar/inactivarproducto.php?ID=<?php echo $ver[0] ?>"> <button type="button" class="btn btn-danger" onclick="return confirmDelete()"><i class="bi bi-trash"></i></button></a></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>

</html>