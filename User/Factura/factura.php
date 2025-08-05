<?php session_start();
 $random= rand(0000,9999);
 require_once "../../clases/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulario Pedido</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylemenu.css">

</head>
<script type="text/javascript">
    function confirmDelete() {

        var respuesta = confirm("Seguro que desea borrar?");
        if (respuesta == true) {
            alert("Registro Borrado");
            return true;
        } else {
            alert("Ha decidido no borrar el registro");
            return false;
        }
    }

   
</script>

<body>
    <?php include("../vistas/header2.php"); ?>
    <div class="content">
        <div class=" card container mt-2">
            <div class="row g-3">

                <form action="../procesos/registrarpedido.php" method="post" class="row g-3 needs-validation">

                    <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">Nueva Venta</span></h1>

                    <!-- Username input -->
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Codigo Venta</label>
                            <input value="<?php echo $random ?>"  type="text" class="form-control" name="cod_pedido" autofocus required>


                        </div>
                    </div>
                   
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Cliente</label><br>
                            <select class="form-control" name="id_cliente" id="id_cliente">
                            <?php 
                    $obj = new conectar();
                    $cx = $obj->conexion();
                    $sql = "SELECT * FROM clientes";
                    $result = mysqli_query($cx, $sql);
                    while($ver = mysqli_fetch_row($result)){ ?>
                        <option value="<?php echo $ver[0]; ?>">C.C: <?php echo $ver[1]." / ".$ver[2]." / ".$ver[3] ?></option>
                    <?php } ?>
                </select>
                        </div>
                    </div>



                    <div class="col-md-6 position-relative ">
                        <div class="form-outline">
                            <label for="validationTooltip03 " class="form-label ">Fecha de Venta</label>
                            <input type="date" class="form-control" name="fecha_pedido" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Producto</label><br>
                            <select class="form-control" name="ID_Producto" required onchange="calcularValorUnitario(this)">
                    <?php 
                    $obj = new conectar ();
                    $cx = $obj->conexion();
                    $sql = "SELECT * FROM productos";
                    $result = mysqli_query($cx, $sql);
                    while($ver = mysqli_fetch_row($result)){ ?>
                        <option value="<?php echo $ver[0]; ?>" data-precio="<?php echo $ver[4]; ?>"><?php echo $ver[1]." /  ".$ver[3] ?></option>
                    <?php } ?>
                </select>
                        </div>
                    </div>


                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">Cantidad</label>
                            <input type="text" class="form-control" name="Cantidad" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Precio Unitario</label>
                            <input type="text" class="form-control" name="Precio_Uni" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Total</label>
                            <input type="text" class="form-control" name="Total" required />


                        </div>
                    </div>
                   


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 rounded-pill">Registrar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>