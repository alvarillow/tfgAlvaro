<?php

    function conectar($esRemota){

        if($esRemota){
            $servidor = "";
           
        }else{
            $servidor = "localhost";
            $usuario = "root";
            $password = "admin";
            $bd = "tienda_padel";
        }
      
        $conector = mysqli_connect($servidor, $usuario, $password, $bd);
        if ($conector ) {
            return $conector;
        }
        else{
            echo mysqli_connect_error();
        }
   

        echo "conectamos a la BD<br>";

        $conectar = mysqli_connect($servidor, $usuario, $password, $bd);

        if($conectar){
            echo "la conexion se ha realizado con exito<br>";
            return $conectar;
        }else{
            echo "error no se ha conectado<br>";
            echo mysqli_connect_error();
            exit;
        }
    }
   

?>          




