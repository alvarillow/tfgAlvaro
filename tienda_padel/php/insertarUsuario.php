<?php 

require 'BD/conectorBD.php';
require 'BD/DAOusuarios.php';


$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email = $_POST['email'];
$DNi = $_POST['dni'];
$Nombre = $_POST['nombre'];
$Apellido1 = $_POST['apellido'];
$Apellido2 = $_POST['apellido2'];
$ComunidadAutonoma = $_POST['comunidadautonoma'];
$Telefono = $_POST['telefono'];
$CP = $_POST['codigopostal'];
$Provincia = $_POST['provincia'];


 $conexion = conectar(false);
 $consulta = insertarUsuarios($conexion,$usuario,$password,$email,$DNi,$Apellido1,$Apellido2,$ComunidadAutonoma,$Nombre,$Telefono,$CP,$Provincia);

 header('Location: ../login.html');

 ?>