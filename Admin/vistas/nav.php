<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">

        <div class="container-fluid">
            <a class="navbar-brand" href="textopresentacion.php"> <img src="../vistas/img/logosismacoin.png" alt="logo" width="70px"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="../vistas/menu.php"><i class="bi bi-house"></i> Inicio |</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-add"></i> Usuario
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../vistas/registrodeusuario.php"><span class="bi bi-person-plus-fill"> Nuevo Usuario</span></a></li>
                            <li><a class="dropdown-item" href="../listas/listarUsuarios.php"><span class="bi bi-person-lines-fill"> Lista de Usuario </span></a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-people"></i> Clientes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../vistas/formularioclientes.php"><span class="bi bi-person-plus-fill"> Nuevo Cliente</span></a></li>
                            <li><a class="dropdown-item" href="../listas/listarClientes.php"><span class="bi bi-person-lines-fill"> Lista Cliente </span></a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-box-seam"></i> Productos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../vistas/formularioproductos.php"><span class="bi bi-person-plus-fill"> Nuevo Producto</span></a></li>
                            <li><a class="dropdown-item" href="../listas/listarproducto.php"><span class="bi bi-person-lines-fill"> Lista Producto </span></a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-truck"></i> Proveedor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../vistas/formularioproveedor.php"><span class="bi bi-person-plus-fill"> Nuevo Proveedor</span></a></li>
                            <li><a class="dropdown-item" href="../listas/listarproveedor.php"><span class="bi bi-person-lines-fill"> Lista Proveedor </span></a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-cash-coin"></i> Factura
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../Factura/factura.php"><span class="bi bi-plus-circle"> Nueva Venta</span></a></li>
                            <li><a class="dropdown-item" href="../listas/listarVentas.php"><span class="bi bi-card-list"> Lista Venta </span></a></li>
                            <li>
                           

                        </ul>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</body>


</html>