<?php
session_start();

if(!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}

if (!isset($_POST['submit'])) {
    // Aquí podrías manejar el envío del formulario si es necesario
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!</h1>
    <div style:display:flex; flex-direction:column;>
        <img src="./imagen/20240216.jpg" alt="Jeroglífico" style="max-width:300px;">
    <form method="post" action="logout.php">
        <button type="submit" name="enviarSolucion">Enviar</button>
    </form>

    <a href="resultado.php">Cerrar sesión</a>
</body>
</html>
