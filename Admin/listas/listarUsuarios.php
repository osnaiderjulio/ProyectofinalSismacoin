<?php
session_start();
require_once "../../clases/usuario.php";
require_once "../../clases/conexion.php";

$c=new conectar();
$cx=$c->conexion();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Lista Usuario</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/stylemenu.css">
</head>

<body>
<?php include("../vistas/header.php");?> 
  <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">Lista de usuarios</span></h1>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Usuario</th>
          <th scope="col">Idcargo</th>
          <th scope="col">Primer nombre</th>
          <th scope="col">Segundo nombre</th>
          <th scope="col">Primer Apellido</th>
          <th scope="col">Segundo Apellido</th>
          <th scope="col">Telefono</th>
          <th scope="col">correo</th>
          <th scope="col">pais</th>
          <th scope="col">ciudad</th>
          <th scope="col">Genero</th>
          <th scope="col">Edad</th>
          <th scope="col">Estado</th>
          <th scope="col">Acciones</th>

        </tr>
      </thead>
      
      <tbody>
        <?php
        $sql = "SELECT * FROM login,cargo where login.IDcargo=cargo.ID ";
        $result = mysqli_query($cx, $sql);
        while ($ver = mysqli_fetch_array($result)) :
        ?>
          <tr>
            <td><?php echo $ver[0]; ?></td>
            <td><?php echo $ver[1]; ?></td>
            <td><?php echo $ver['Cargo']; ?></td>
            <td><?php echo $ver[4]; ?></td>
            <td><?php echo $ver[5]; ?></td>
            <td><?php echo $ver[6]; ?></td>
            <td><?php echo $ver[7]; ?></td>
            <td><?php echo $ver[8]; ?></td>
            <td><?php echo $ver[9]; ?></td>
            <td><?php echo $ver[10]; ?></td>
            <td><?php echo $ver[11]; ?></td>
            <td><?php echo $ver[12]; ?></td>
            <td><?php echo $ver[13]; ?></td>
            <td><?php echo $ver[14]; ?></td>

            <td style="text-align:center"><a href="../editar/editarusuario.php?id=<?php echo $ver[0];?>"> <button type="button" class="btn btn-info"><i class="bi bi-pencil"></i></button></a></td>
            <td style="text-align:center"><a href="../inactivar/inactivarusuario.php?ID=<?php echo $ver[0] ?>"> <button type="button" class="btn btn-danger" onclick="return confirmDelete()"><i class="bi bi-trash"></i></button></a></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>

</html>