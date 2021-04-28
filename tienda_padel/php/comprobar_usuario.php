<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
    require "BD/conectorBD.php";
    require "BD/DAOUsuarios.php";
   
    $usuario = $_POST["usuario"];
	$password = $_POST["password"];
  
    $conexion = conectar(false);
    $consulta = consultaLogin($conexion, $usuario, $password);
 

    if(mysqli_num_rows($consulta) == 1)
    {
        $fila = mysqli_fetch_assoc($consulta);
        //Creo la sesión del usuario.
        crearSesion($fila);
        header("Location: principal.php");
    }
    else
    {
        $consulta = consultaUsuarios($conexion, $usuario);
        if(mysqli_num_rows($consulta) == 1)
        {
            header("Location: ../contraseña_nueva.html");
        }
        else
        {
            header("Location: ../ingresar_usuario.html");
        }
    }