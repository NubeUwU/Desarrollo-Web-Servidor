<?php
session_start();
$mensaje2 = "";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p style="background-color: salmon;">ALUMNO</p>
    <p style="background-color: salmon;"><?php echo $_SESSION['dni'];?></p>
    <p style="background-color: aquamarine;">Nombre</p>
    <p style="background-color: aquamarine;"><?php echo strtoupper($_SESSION['nombre']);?></p>

<form method ="POST" action="ejercicio3.php">
    <label for="DNI">DNI</label>
    <input type="text" name="nombre" value="<?php echo $_SESSION['dni']?>" readonly>
    <br><br>


    <label for="codCurso">Cod Curso</label>
    <br><br>

    <label for="pruebaA" >Prueba A</label>
    <br><br>

    <label for="pruebaB" >Prueba B</label>
    <br><br>

    <label for="tipo"></label>
    <br><br>

    <label for="inscripcion"></label>
    <br><br>

</form>
<?php

echo $mensaje2;
?>
</body>
</html>