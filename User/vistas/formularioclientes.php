<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>clientes</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylemenu.css">

</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <div class="card container mt-2">
            <div class="row g-3">
                <form action="../Clientes/registrarclientes.php" method="post" class="row g-3 needs-validation">

                    <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">Registrar Clientes</span></h1>


                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">Doc Identidad</label>
                            <input type="text" class="form-control" name="identidad" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">Primer Apellido</label>
                            <input type="text" class="form-control" name="papellido" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Segundo Apellido</label>
                            <input type="text" class="form-control" name="sapellido" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Correo</label>
                            <input type="text" class="form-control" name="correo" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Telefono</label>

                            <input type="text" class="form-control" name="telefono" required />

                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary rounded-pill">Enviar</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>