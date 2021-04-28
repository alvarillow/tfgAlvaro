<?php

        function mostrarPalas($conexion){
            $consulta = "SELECT * FROM palas";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

        function modificarpalas($conexion, $Marca, $Precio, $Stock, $Descripcion, $Idpalas, $Nombre, $rutaImg){
            $consulta="UPDATE `palas` SET `Marca` = '$Marca', `Precio` = '$Precio', `Decripcion` = '$Decripcion', `Descripcion` = '$Descripcion', `Imagen` = '$rutaImg' WHERE (`idpalas` = '$Idpalas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

 

        function eliminarpalas($conexion, $Idpalas){
            $consulta = "DELETE FROM `palas` WHERE (`idpalas` = '$Idpalas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

       
        function insertarpalas($conexion, $Marca, $Nombre, $Decripcion, $Stock, $Precio, $rutaImg){
           $consulta=" INSERT INTO `palas` (`Marca`, `Nombre`, `Descripcion`, `Stock`, `Precio`, `Imagen`) VALUES ('$Marca', '$Nombre', '$Decripcion', '$Stock', '$Precio', '$rutaImg')";
           $resultado= mysqli_query($conexion, $consulta);
           return $resultado;
        }
        function consultapalas($conexion)
        {
            $consulta = "SELECT idpalas, Imagen FROM palas ORDER BY rand() LIMIT 3";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        ?>