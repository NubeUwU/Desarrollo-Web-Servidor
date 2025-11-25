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
