<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulario nuevo</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylemenu.css">

</head>

<body>
    <?php include("header.php"); ?>
    <div class="content">
        <div class=" card container mt-2">
            <div class="row g-3">

                <form action="../procesos/registrarUsuario.php" method="post" class="row g-3 needs-validation">

                    <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">Registrar nuevo usuario</span></h1>

                    <!-- Username input -->
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" autofocus required>


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" autofocus required>


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip02" class="form-label">id Cargo</label>
                        <select name=IDcargo class="form-select" aria-label="Default select example">
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>



                    <div class="col-md-6 position-relative ">
                        <div class="form-outline">
                            <label for="validationTooltip03 " class="form-label ">Primer Nombre</label>
                            <input type="text" class="form-control" name="pnombre" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Segundo Nombre</label>
                            <input type="text" class="form-control" name="snombre" required />


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
                            <label for="validationTooltip01" class="form-label">Celular</label>
                            <input type="number" class="form-control" name="telefono" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Correo</label>
                            <input type="email" class="form-control" name="correo" required />


                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Pais</label>
                            <input type="text" class="form-control" name="pais" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Genero</label>

                            <input type="text" class="form-control" name="genero" required />

                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label class="form-label">Edad</label>
                            <input type="date" class="form-control" name="edad" required />


                        </div>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 rounded-pill">Registrar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>