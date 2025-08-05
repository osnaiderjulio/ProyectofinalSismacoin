<?php
class proveedor
{

    public function registrarproveedor($datos)
    {

        $c = new conectar();

        $cx = $c->conexion();

        $sql = "INSERT INTO proveedor (Cod_Proveedor,Nombre,Apellido1,Apellido2,correo,Telefono,empresa,estado)
value('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','Activo')";
        //echo(var_dump($datos));
        return mysqli_query($cx, $sql);
    }

    public function obtenDatosUsuario($datos)
    {

        $ID=$datos[0];
        $c = new conectar();
        $cx = $c->conexion();
        $sql = "SELECT Cod_Proveedor,Nombres,apellido1,apellido2,
correo,Telefono, empresa FROM proveedor
WHERE ID='$ID'";
        $result = mysqli_query($cx, $sql);
        $ver = mysqli_fetch_row($result);
        $datos = array(
            'Cod_Proveedor' => $ver[0],
            'Nombre' => $ver[1],
            'Apellido1' => $ver[2],
            'Apellido2' => $ver[3],
            'correo' => $ver[4],
            'Telefono' => $ver[5],
            'empresa' => $ver[6],

        );
        return $datos;
    }


    
    public function actualizarproveedor($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE proveedor set Cod_Proveedor='$datos[1]',
                                	Nombre='$datos[2]',
                                	Apellido1='$datos[3]',
                                    Apellido2='$datos[4]',
                                    correo='$datos[5]',
                                    Telefono='$datos[6]',
                                    empresa='$datos[7]',
                                    estado='$datos[8]'
                            where ID='$datos[0]'";
        $result = mysqli_query($conexion, $sql);
        if ($result > 0) {
            echo "<script> alert('usuario actualizado exitosamente ');
                              location.href = '../listas/listarproveedor.php';
                               </script>";
        } else {
        }
    }
}
