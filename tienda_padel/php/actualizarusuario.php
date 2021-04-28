<?php
        require "BD/DAOusuarios.php";
        require "BD/conectorBD.php";
        
        $conexion = conectar(false);
        
        $rol = $_POST['Rol'];

        $idUsuario = $_POST['idUsuario'];

        $consulta = modificarusuario($conexion, $rol, $idUsuario);

        header('Location: panel.php');


?>  