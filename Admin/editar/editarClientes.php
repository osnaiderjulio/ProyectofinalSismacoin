<?php
require_once "../../clases/conexion.php";
require_once "../../Clientes/userclientes.php";

session_start();
$c = new conectar();
$cx = $c->conexion();
$obj = new userclientes();
//if(empty($_REQUEST['id']))
//{
//header('location:listarclientes.php');
//mysqli_close($cx);
//}
$Cod_clientes = $_GET['Cod_clientes'];
if(isset($_GET['Cod_clientes'])){
    
    $sql = "SELECT * FROM clientes WHERE Cod_clientes='$Cod_clientes'";
    $result = mysqli_query($cx, $sql);
    $ver = mysqli_fetch_array($result);
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/stylemenu.css">
    <title>editar clientes</title>
</head>


<body>
    <?php include("../vistas/header.php"); ?>
    <div class="content">
        <div class="card container mt-2">
            <div class="row g-3">
                <form action="../procesos/actualizarclientes.php" method="post" class="row g-3 needs-validation">

                    <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">ACTUALIZAR CLIENTES</span></h1>
                    

                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">Cod Clientes</label>
                            <input type="text" class="form-control" name="Cod_clientes" value="<?php echo $Cod_clientes ?>" readonly required  />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">Doc Identidad</label>
                            <input type="text" class="form-control" name="identidad" autocomplete="off" value="<?php echo $ver[1] ?>" />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" autocomplete="off" value="<?php echo $ver[2] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">Primer Apellido</label>
                            <input type="text" class="form-control" name="papellido" autocomplete="off" value="<?php echo $ver[3] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Segundo Apellido</label>
                            <input type="text" class="form-control" name="sapellido" autocomplete="off" value="<?php echo $ver[4] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Correo</label>
                            <input type="text" class="form-control" name="correo" autocomplete="off" value="<?php echo $ver[5] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Telefono</label>

                            <input type="text" class="form-control" name="telefono" autocomplete="off" value="<?php echo $ver[6] ?>" required />

                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip02" class="form-label">Estado</label>
                        <select name="estado" value="<?php echo $ver[14] ?>"  class="form-select" aria-label="Default select example">
                            <option value="Activo"> Activo</option>
                            <option value="Inactivo">  Inactivo</option>
                        </select>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary rounded-pill">Enviar</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>