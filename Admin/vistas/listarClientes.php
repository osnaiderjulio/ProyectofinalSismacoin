<?php
session_start();
require_once "../../clases/conexion.php";
$c = new conectar();
$cx = $c->conexion();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lista Cliente</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/stylemenu.css">
</head>

<?php include("../vistas/header.php"); ?>

<body>
  <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">Lista de clientes</span></h1>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">documentoid</th>
          <th scope="col">Nombres</th>
          <th scope="col">apellido1</th>
          <th scope="col">apellido2</th>
          <th scope="col">correo</th>
          <th scope="col">Telefono</th>
          <th scope="col">Acciones</th>
          

        </tr>
      </thead>

      <tbody>
        <?php
        $sql = "SELECT Cod_clientes,documentoid,Nombres,apellido1,apellido2,
        	correo,Telefono FROM clientes ";
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
            <td style="text-align:center"><a href="../editar/editarClientes.php?Cod_clientes=<?php echo $ver[0];?>"> <button type="button" class="btn btn-info"><i class="bi bi-pencil"></i></button></a></td>
            <td style="text-align:center"><a href="../procesos/eliminarusuarios.php?Cod_clientes=<?php echo $row['Cod_clientes'] ?>"> <button type="button" class="btn btn-danger" onclick="return confirmDelete()"><i class="bi bi-trash"></i></button></a></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>

</html>