
<?php
class conectar{

private $servidor="localhost";
private $usuario="root";
private $password="";
private $bd="proyecto_final_b2";

public function conexion(){
    $cone=mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);
return $cone;
}
}
?>
