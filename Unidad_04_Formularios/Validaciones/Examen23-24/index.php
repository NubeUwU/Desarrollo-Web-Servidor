<?php
include "login.php"; 

// Se inicia un mensaje en blanco
$mensaje = "";



/* RECARGA */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["usuario"];
    $pass = $_POST["clave"];
    $nombre = "";

    // Usamos la función de login.php
    if (validarLogin($user, $pass, $nombre)) {
        session_start();
        $_SESSION["usuario"] = $nombre;
        $_SESSION["login"] = $user;

        // Envia al login
        header("Location: inicio.php");
        exit();

    } else {
        $mensaje = "Usuario o contraseña incorrectos.";
    }
}
?>


<!----- HTML ----->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Iniciar sesión</h2>
<p><span style="color:red"><?php echo $mensaje; ?></span></p>
<form action="index.php" method="POST">
    <label>Usuario:</label>
    <input type="text" name="usuario" required>
    <br>

    <label>Contraseña:</label>
    <input type="password" name="clave" required>
    <br>

    <button type="submit">Entrar</button>
</form>

</body>
</html>
