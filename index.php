<?php
session_start();
$mensaje ="";

if (isset($POST["INICIAR"])) {
   $usuario = $POST["usuario"];
   $clave = $POST["clave"];
   $tipo = $_POST["tipo de usuario"];
   $usuario = Strtoupper($usuario);

   if ($usuario == "ADMIN" && $clave == "12345") {
    //variables de sesion   
    $_SESSION["user"] = "Estefany Torres";
    $_SESSION["autorizado"] = true;                 
    header("location: principal.php"); //redireccionar a otra pagina
   }else {
    $mensaje = "usuario y/o contraseña incorrecta";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>

    </head>

    <body>
        <h2>LOGIN</h2>
        <form method="POST" action="index.php">
            <label for="">Usuario: </label>
            <input type="text" name="usuario" placeholder="usuario"><br><br>
            <label for="">clave: </label>
            <input type="text" name="clave" placeholder="password"><br><br>
            <select name="tipousuario" id="">
            <option value="Administrador">Administrador</option>
            <option value="Invitado">Invitado</option>
        </select>
        <br><br>
            <button type="submit" name="iniciar">INICIAR SESIÓN</button>
            </form>
            <?php echo $mensaje; ?>
    </body>
    </html>