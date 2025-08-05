<?php

require_once "conexion.php";
$obj=new conectar();
$cx=$obj->conexion();
$sql="SELECT * FROM cargo";

$result=mysqli_query($cx,$sql);
?>

<?php while($ver=mysqli_fetch_row($result)):?>

    <?php echo $ver[0] ?>
    <?php echo $ver[1]?>
    <?php endwhile;?>
