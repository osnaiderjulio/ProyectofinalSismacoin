<?php
class userclientes
{

    public function registrarclientes($datos)
    {

        $c = new conectar();

        $cx = $c->conexion();

        $sql = "INSERT INTO clientes(documentoid,Nombres,apellido1,apellido2,correo,
Telefono,estado)
value('$datos[0]','$datos[1]','$datos[2]','$datos[3]',
'$datos[4]','$datos[5]','Activo')";
        //echo(var_dump($datos));
        return mysqli_query($cx, $sql);
    }

    public function obtenDatosUsuario($Cod_clientes)
    {
        $c = new conectar();
        $cx = $c->conexion();
        $sql = "SELECT Cod_clientes,documentoid,Nombres,apellido1,apellido2,
correo,Telefono FROM clientes
WHERE Cod_clientes='$Cod_clientes'";
        $result = mysqli_query($cx, $sql);
        $ver = mysqli_fetch_row($result);
        $datos = array(
            'Cod_clientes' => $ver[0],
            'documentoid' => $ver[1],
            'Nombres' => $ver[2],
            'apellido1' => $ver[3],
            'apellido2' => $ver[4],
            'correo' => $ver[5],
            'Telefono' => $ver[6],

        );
        return $datos;
    }

    public function actualizarclientes($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE clientes set documentoid='$datos[1]',
                                	Nombres='$datos[2]',
                                	apellido1='$datos[3]',
                                    apellido2='$datos[4]',
                                    correo='$datos[5]',
                                    Telefono='$datos[6]',
                                    estado='$datos[7]'

                            where Cod_clientes='$datos[0]'";
        $result = mysqli_query($conexion, $sql);
        if ($result > 0) {
            echo "<script> alert('usuario actualizado exitosamente ');
                              location.href = '../../Admin/listas/listarClientes.php';
                               </script>";
        } else {
        }
    }
}
