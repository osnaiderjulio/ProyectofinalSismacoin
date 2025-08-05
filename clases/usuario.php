<?php
class usuario
{

    public function registrarusuario($datos)
    {

        $c = new conectar();

        $cx = $c->conexion();

        $sql = "INSERT INTO login(usuario,password,IDcargo,PriNombre,SegNombre,
PriApellido,SegApellido,Telefono,correo,pais,ciudad,genero,edad,estado)
value('$datos[0]','$datos[1]','$datos[2]','$datos[3]',
'$datos[4]','$datos[5]','$datos[6]','$datos[7]',
'$datos[8]','$datos[9]','$datos[10]','$datos[11]',
'$datos[12]','Activo')";
        //echo(var_dump($datos));
        return mysqli_query($cx, $sql);
    }
    public function loginuser($datos)
    {
        $c = new conectar();
        $cx = $c->conexion();

        
        $password = ($datos[1]);
        $_SESSION['usuario'] = $datos[0];
        $_SESSION['iduser'] = self::traerid($datos);

        $sql = "SELECT usuario,IDcargo from login where usuario='$datos[0]' and password= '$password'";
        $result = mysqli_query($cx, $sql);

        $cargo = mysqli_fetch_assoc($result);


        if ($cargo['IDcargo'] == 1) {
            header("location: ../Admin/vistas/menu.php");
            return 1;
        } elseif ($cargo['IDcargo'] == 2) {
            header("location: ../User/vistas/menu-Usuario.php");
            return 2;
        } else {
            echo"<script> 
            alert('Error! El Usuario y/o Contraseña son incorrectos.');
            location.href='../index.php';
            </script>";

            return 0;
        }
    }

    public function traerid($datos)
    {
        $c = new conectar();
        $cx = $c->conexion();
        $password = ($datos[1]);
        $sql = "SELECT ID FROM login WHERE usuario='$datos[0]' and password='$password'";
        $result = mysqli_query($cx, $sql);
        return mysqli_fetch_row($result)[0];
    }



    public function actualizarusuario($datos)
    {
        $c = new conectar();
        $cx = $c->conexion();
        $sql = "UPDATE login set usuario='$datos[1]',password='$datos[2]',IDcargo='$datos[3]',PriNombre='$datos[4]',SegNombre='$datos[5]',
PriApellido='$datos[6]',SegApellido='$datos[7]',Telefono='$datos[8]'
,correo='$datos[9]',pais='$datos[10]'
,ciudad='$datos[11]',genero='$datos[12]',edad='$datos[13]',estado='$datos[14]' WHERE ID='$datos[0]'";
        $result = mysqli_query($cx, $sql);
        if ($result > 0) {
            echo "<script> alert('usuario actualizado exitosamente ');
                      location.href = '../listas/listarUsuarios.php';
                       </script>";
        } else {
        }
    }
    public function eliminarusuarios($Idlogin)
    {
        $c = new conectar();
        $conexion = $c->conexion();
        $sql = "DELETE from login where ID='$Idlogin'";
        return mysqli_query($conexion, $sql);
    }
}
