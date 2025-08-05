<?php session_start(); 
$random=random_int(000,999);

require_once "../../clases/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>productos</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylemenu.css">

</head> 

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <div class="card container mt-2">
            <div class="row g-3">
                <form action="../../productos/registrarproducto.php" method="post" class="row g-3 needs-validation"  enctype="multipart/form-data">

                    <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">Registrar productos</span></h1>


            
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Codigo Producto</label>
                            <input type="text" class="form-control" value="<?php echo $random?> " name="Cod_Producto" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03"   class="form-label">imagen producto</label>
                            <input type="file" class="form-control" name="imagen" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">producto</label>
                            <input type="text" class="form-control" name="producto" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Valor Unitario</label>
                            <input type="text" class="form-control" name="Valor_Unitario" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">fecha ingreso</label>

                            <input type="date" class="form-control" name="fechaIng" required />

                        </div>

                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">fecha vencimiento</label>

                            <input type="date" class="form-control" name="fechaVen" required />

                        </div>

        
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">categoria</label>

                            <input type="text" class="form-control" name="categoria" required />

                        </div>

                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">empresa</label>

                            <input type="text" class="form-control" name="empresa" required />

                        </div>

                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">existencia</label>

                            <input type="text" class="form-control" name="existencia" required />

                            
                            
                        </div>

                        <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Proveedor</label><br>
                            <select class="form-control" name="Cod_Proveedor" id="Cod_Proveedor">
                            <?php 
                    $obj = new conectar();
                    $cx = $obj->conexion();
                    $sql = "SELECT * FROM proveedor";
                    $result = mysqli_query($cx, $sql);
                    while($ver = mysqli_fetch_row($result)){ ?>
                        <option value="<?php echo $ver[1]; ?>">C.C: <?php echo $ver[1]." / ".$ver[2]." / ".$ver[3] ?></option>
                    <?php } ?>
                </select>
                        </div>
                    </div>

                            <input type="hidden" name="estado" value="activo">
                        </div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-pill">Enviar</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>