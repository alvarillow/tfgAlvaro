
<?php

        function mostrarPalas($conexion){
            $consulta = "SELECT * FROM palas";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

        function modificarpalas($conexion, $Marca, $Precio, $Stock, $Descripcion, $Idpalas, $Nombre, $rutaImg){
            $consulta="UPDATE `palas` SET `Marca` = '$Marca', `Decripcion` = '$Decripcion', `Stock` = '$Stock', `Precio` = '$Precio', `Imagen` = '$rutaImg', `Logo` = '$rutaImg2'  WHERE (`idPalas` = '$Idpalas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

 

        function eliminarpalas($conexion, $Idpalas){
            $consulta = "DELETE FROM `palas` WHERE (`idPalas` = '$Idpalas')";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }

       
        function insertarpalas($conexion, $Idpalas, $Marca, $Nombre, $Descripcion, $Stock, $Precio, $rutaImg ){
           $consulta="INSERT INTO `tienda_padel`.`palas` (`Marca`, `Nombre`, `Descripcion`, `Stock`, `Precio`, `Imagen` ) VALUES ('$Marca', '$Nombre', '$Descripcion', '$Stock', '$Precio', '$rutaImg')";
           $resultado= mysqli_query($conexion, $consulta);
           return $resultado;
        }
        function consultapalas($conexion)
        {
            $consulta = "SELECT idPalas, Imagen FROM palas ORDER BY rand() LIMIT 3";
            $resultado = mysqli_query($conexion, $consulta);
            return $resultado;
        }
        ?>