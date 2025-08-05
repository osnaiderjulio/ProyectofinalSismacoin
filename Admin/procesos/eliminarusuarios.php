<?php 
	$Idlogin=$_GET['ID'];

	require_once "../../clases/conexion.php";
	require_once "../../clases/usuario.php";

	$obj= new usuario();
	if($obj->eliminarusuarios($Idlogin)==1){
		header("location: ../vistas/listarUsuarios.php");
	}else{
		echo "fallo al agregar";
	}
 ?>