<?php

require_once "../../clases/conexion.php";
require_once "../../productos/producto.php";

session_start();
$c = new conectar();
$cx = $c->conexion();
$obj = new producto();





$ID = $_GET["ID"];

if (isset($_GET["ID"])) {


    $obj = new conectar();
    $cx = $obj->conexion();

    $sql = "SELECT * FROM productos WHERE ID='$ID'";
    $consulta = mysqli_query($cx, $sql);
    $ver = mysqli_fetch_row($consulta);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/stylemenu.css">
    <title>editar proveedor</title>
</head>


<body>
    <?php include("../vistas/header.php"); ?>
    <div class="content">
        <div class="card container mt-2">
            <div class="row g-3">
                <form action="../procesos/actualizarproducto.php" enctype="multipart/form-data" method="post" class="row g-3 needs-validation">

                    <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">ACTUALIZAR PROVEEDOR</span></h1>
                    

                    <center><label for=""><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($ver[2]) ; ?>"></label></center>  

                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">ID</label>
                            <input type="text" class="form-control" name="ID" value="<?php echo $ID ?>" readonly required  />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label"> Cod_Producto</label>
                            <input type="text" class="form-control" name="Cod_Producto" autocomplete="off" value="<?php echo $ver[1] ?>" />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">imagen</label>
                            <input type="file" class="form-control" name="imagen" autocomplete="off" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">Producto </label>
                            <input type="text" class="form-control" name="producto" autocomplete="off" value="<?php echo $ver[3] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Precio Unitario</label>
                            <input type="text" class="form-control" name="Valor_Unitario" autocomplete="off" value="<?php echo $ver[4] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Fecha de </label>
                            <input type="date" class="form-control" name="fechaIng" autocomplete="off" value="<?php echo $ver[5] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Fecha de Vencimiento</label>

                            <input type="text" class="form-control" name="fechaVen" autocomplete="off" value="<?php echo $ver[6] ?>" required />

                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Categoria</label>

                            <input type="text" class="form-control" name="categoria" autocomplete="off" value="<?php echo $ver[7] ?>" required />

                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Empresa</label>

                            <input type="text" class="form-control" name="empresa" autocomplete="off" value="<?php echo $ver[8] ?>" required />

                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Existencia</label>

                            <input type="text" class="form-control" name="existencia" autocomplete="off" value="<?php echo $ver[9] ?>" required />

                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Proveedor</label>

                            <input type="text" class="form-control" name="Cod_Proveedor" autocomplete="off" value="<?php echo $ver[10] ?>" required />

                        </div>
                    </div>

                    

                    

                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip02" class="form-label">Estado</label>
                        <select name="estado" value="<?php echo $ver[11] ?>"  class="form-select" aria-label="Default select example">
                            <option value="Activo"> Activo</option>
                            <option value="Inactivo">  Inactivo</option>
                        </select>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary rounded-pill">ACTUALIZAR</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>