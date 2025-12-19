<?php
include "login.php";

$mensaje = "";

if(isset($_POST["enviar"])){
    $dni = $_POST["dni"];
    $usuario = validarLogin($dni);
    
    if($usuario){
        session_start();

        $_SESSION["dni"] = $dni;
        $_SESSION["nombre"] = $usuario["nombre"];
        $tipo = strtolower($usuario["tipo"]);

        if($tipo === 'profesor'){
            header("Location: ejercicio2.php");
            exit;
        }

        if($tipo === 'alumno'){
            header("Location: ejercicio3.php");
            exit;
        }

    }else{
        $mensaje = "El usuario introducido no existe";
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
    <form method="POST" action="ejercicio1.php">
        <label for="datos">DNI</label><br>
        <input type="text" name="dni"><br><span><?php echo $mensaje ?></span><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>