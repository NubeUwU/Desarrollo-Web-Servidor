<?php
session_start();
include "login.php";

$mensaje = "";

if (isset($_POST['enviar'])) {

    $dni = $_POST['dni'];
    $usuario[] = validarLoginRol($dni);

    if ($rol == "alumno") {
        header("location: ejercicio3.php");
        exit;

    } else if ($rol == "profesor") {
        header("location: ejercicio2.php");
        exit;

    } else {
        $mensaje = "No existe ningún usuario con ese DNI";
    }
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

    <form action="ejercicio1.php" method="post">
        <label for="dni">DNI:</label>
        <br>

        <input type="text" name="dni" style="border: 2px solid blue" required >
        <br><br>

        <input type="submit" name="enviar" style="color: white; background-color: blue; border: 2px solid purple;">
    </form>

    <p><span style="color:red"><?php echo $mensaje; ?></span></p>

</body>
</html>
