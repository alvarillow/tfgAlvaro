<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <form class="desloguear" id="desloguear" name="desloguear"  novalidate>
        <fieldset>
            <legend>Datos de usuario</legend>
            <?php>
                session_start();
               session_destroy();
               header('Location: ../Login.html');

            ?>

        </fieldset>
        <br>
        <center><input type="submit" name="boton" value="cerrar sesion" id="boton"></center>
    </form>
</body>
</html>