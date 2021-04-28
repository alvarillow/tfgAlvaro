<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
require "BD/DAOpalas.php";
require "BD/conectorBD.php";

$conexion = conectar(false);

$Marca = $_POST["Marca"];
$Nombre = $_POST["Nombre"];
$Descripcion = $_POST["Descripcion"];
$Stock = $_POST["Stock"];
$Precio = $_POST["Precio"];

$ImagenesN=$_FILES['Imagen']['name'];
$imagenA=$_FILES['Imagen']['tmp_name'];
$rutaImg="../img/".$ImagenesN;

move_uploaded_file($imagenA,$rutaImg);



$consulta =insertarpalas($conexion, $Marca, $Nombre, $Decripcion, $Stock, $Precio, $rutaImg);
   header('Location: adminpalas.php');
  ?>

