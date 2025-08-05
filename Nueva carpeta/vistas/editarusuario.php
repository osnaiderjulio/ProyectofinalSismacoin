<?php
require_once "../clases/conexion.php";
require_once "../clases/usuario.php";

session_start();
$c = new conectar();
$cx = $c->conexion();
$obj = new usuario();
//if(empty($_REQUEST['id']))
//{
//header('location:listarusuarios.php');
//mysqli_close($cx);
//}
$iduser = $_REQUEST['id'];
$obj->obtenDatosUsuario($iduser);
$sql = "SELECT * FROM login WHERE id='$iduser'";
$result = mysqli_query($cx,$sql);
$ver = mysqli_fetch_array($result); {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleuser_edit.css">
    <link rel="stylesheet" href="../css/stylemenu.css">
    <title>actualizar usuario</title>
</head>
<body>
<?php include ("header.php");?>
    <div class="content">
        <div class=" card container mt-2">
            <div class="row g-3">

                <form action="../procesos/actualizarusuario.php" method="post" class="row g-3 needs-validation">

                <h1 class="text-center"><span class="badge bg-primary mb-4 rounded-pill text-dark">ACTUALIZAR USUARIO</span></h1>

                    <!-- Username input -->
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">ID</label>
                            <input type="text" class="form-control" name="id"  value="<?php echo $iduser ?>" />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" autocomplete="off" value="<?php echo $ver[1] ?>"/>


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" autocomplete="off" value="<?php echo $ver[2] ?>"/>


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip02" class="form-label">id Cargo</label>
                        <select name=IDcargo value="<?php echo $ver[3] ?>"  class="form-select" aria-label="Default select example" />
                            <option value="1">1 Administrador</option>
                            <option value="2"> 2 Usuario</option>
                        </select>
                    </div>



                    <div class="col-md-6 position-relative ">
                        <div class="form-outline">
                            <label for="validationTooltip03 " class="form-label ">Primer Nombre</label>
                            <input type="text" class="form-control" name="pnombre" autocomplete="off" value="<?php echo $ver[4]?>"/>


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Segundo Nombre</label>
                            <input type="text" class="form-control" name="snombre"  value="<?php echo $ver[5]?>"required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip03" class="form-label">Primer Apellido</label>
                            <input type="text" class="form-control" name="papellido"  value="<?php echo $ver[6] ?>"required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Segundo Apellido</label>
                            <input type="text" class="form-control" name="sapellido" value="<?php echo $ver[7] ?>"required/>


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Celular</label>
                            <input type="number" class="form-control" name="telefono" value="<?php echo $ver[8]?>" required />


                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip05" class="form-label">Correo</label>
                            <input type="email" class="form-control" name="correo" value="<?php echo $ver[9]?>" required />


                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Pais</label>
                            <input type="text" class="form-control" name="pais" value="<?php echo $ver[10] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip02" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" value="<?php echo $ver[11] ?>" required />


                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label for="validationTooltip01" class="form-label">Genero</label>

                            <input type="text" class="form-control" name="genero" value="<?php echo $ver[12] ?>" required />

                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <label class="form-label">Edad</label>
                            <input type="date" class="form-control" name="edad" value="<?php echo $ver[13] ?>" required />

                        </div>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 rounded-pill">Editar usuario</button>
                </form>
            </div>
        </div>
    </div>
   
</body>

</html>