<?php
     
        require 'BD/DAOusuarios.php';
        require 'BD/conectorBD.php';
        
        $conexion = conectar(false);
        
       
        $usuario= $_POST['Usuario'];
        $password = $_POST['Password'];
        $nombre = $_POST['Nombre'];
        $Apellido1 = $_POST['Apellido1'];
        $Apellido2 = $_POST['Apellido2'];
        $Telefono = $_POST['Telefono'];
        $email = $_POST['Email'];
        $CP = $_POST['CP'];
        $Provincia = $_POST['Provincia'];
        $ComunidadAutonoma = $_POST['ComunidadAutonoma'];
        $idUsuario = $_POST['idUsuario'];
        $consulta = modificarPerfil($conexion, $usuario, $password, $nombre, $Apellido1, $Apellido2, $Telefono, $email, $CP, $Provincia, $ComunidadAutonoma,  $idUsuario);      
        header('Location: perfil.php');
?>