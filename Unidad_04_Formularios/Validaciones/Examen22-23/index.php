<?php
session_start();
include "login.php"; 

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["usuario"];
    $pass = $_POST["clave"];

    // Usamos la función de login.php
    if (validarLogin($user, $pass)) {

        $_SESSION["usuario"] = $user;

        header("Location: inicio.php");
        exit();

    } else {
        $mensaje = "Usuario o contraseña incorrectos.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Iniciar sesión</h2>
<div style="border: 2px solid black; padding: 5px; display: inline-block">
<form action="index.php" method="POST">
    <label>Usuario:</label>
    <input type="text" name="usuario" required>

    <label>Clave:</label>
    <input type="password" name="clave" required>

    <button type="submit">Entrar</button>
</form>
</div>
<p><?php echo $mensaje; ?></p>

</body>
</html>
