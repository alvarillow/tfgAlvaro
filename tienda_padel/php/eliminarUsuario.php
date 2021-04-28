<?php

require "BD/DAOusuarios.php";
require "BD/conectorBD.php";

$conexion = conectar(false);

$idUsuario = $_GET['idUsuario'];

$consulta = eliminarPerfil($conexion, $idUsuario);

header('Location: panel.php');


?>