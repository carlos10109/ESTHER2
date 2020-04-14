<?php
$correo=$_POST['usuario'];
$password=$_POST['password'];
include_once 'conexion.php';
$mysqlConexion=new mysqli($servidorBd,$usuarioBd,$claveBd,$nombreBd);
$consulta="SELECT * from Usuario WHERE Correo='".$correo."'";
$resultado=$mysqlConexion->query($consulta);
if($registro=$resultado->fetch_array(MYSQLI_ASSOC))
{
    if($registro['Password']==$password)
    {
        session_start();
        $_SESSION['usuario']=$registro['Correo'];
        $_SESSION['tipo']=$registro['Tipo'];
        header("Location: index.php");
    }
    else{
        header("Location: login.php");
        exit();
    }
}
else{
    header("Location: login.php");
    exit();  
}
?>