<?php
session_start();
if (!$_SESSION[autorizado]) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>pagina web principal</title>

    </head>
    <body>
        <h2>Pagina web principal</h2>
        <h3>Bienvenid@: <?php echo $_SESION["user"]?></h3>
        <a href ="cerrar.php">CERRAR SESION</a>
    </body>
    </html>