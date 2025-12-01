<?php
session_start();
include "login.php";

// Verificar que el profesor está logueado
if (!isset($_SESSION["usuario"])) {
    header("Location: ejercicio1.php"); 
}

$usuario = $_SESSION["usuario"]; 
$dni = $_SESSION["dni"];

// Obtenemos los cursos asignados a este profesor
$cursos = datosCursos($usuario);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <table>

        <?php
            foreach($curso as $cursos){
                echo "<td>$curso</td>";
            } 
            ?>

    </table>
</body>
</html>
