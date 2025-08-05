	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../vistas/stylemenu.css">
	<header>
		<div class="header">

			<h1>SISTEMA GESTIÓN DE INVENTARIO</h1>
			<div class="optionsBar">
				<p>colombia |<?php $fechaactual = date("d-m-y|H:i");
								echo $fechaactual ?></p>
				<span>|</span>
				<span class="user">Administrador: <?php echo $_SESSION['usuario']; ?></span>
				<img class="photouser" src="../vistas/img/persona.png">
				<a href="../salir.php"><img class="close" src="../vistas/img/Salir.png" alt="salir del sistema" title="salir"></a>
			</div>
		</div>
		<?php include "nav.php"; ?>

	</header>