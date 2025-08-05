<?php 

class userclientes{

    public function EliminarCliente($idcategoria){
        $c= new conectar();
        $conexion=$c->conexion();
        $sql="DELETE from cliente
                where id_categoria='$idcategoria'";
        return mysqli_query($conexion,$sql);
    }

}
