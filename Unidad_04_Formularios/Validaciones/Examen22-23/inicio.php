<?php
session_start();

// Redirigir al login si no hay usuario en sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

// Inicializamos el contador si no existe
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Comprobamos qué botón se pulsó
if (isset($_POST['incrementar']) && $_SESSION['contador'] < 5) {
    $_SESSION['contador']++;
}

// Si se pulsó grabar, manda a la agenda
if (isset($_POST['grabar']) || $_SESSION['contador'] == 5) {
    header("Location: agenda.php");
    exit;   
}

// Guardamos el valor del contador
$contador = $_SESSION['contador'];

// Función que añade las imágenes
function addImage($contador){
    for($i = 0; $i <= $contador; $i++){
        echo "<img src='./img/OIP{$i}.jfif' style='width:250px; height:150px; border: 2px solid black; margin:2px'>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>
<body>
    <h1>AGENDA</h1>

    <div style="border: 2px solid black; padding: 5px; display: inline-block; margin-top: 10px">
        <p><b>
            Hola <?php echo ucfirst($_SESSION["usuario"]); ?>, ¿cuántos contactos deseas grabar?<br>
            Puedes grabar entre 1 y 5. Por cada pulsación en INCREMENTAR grabarás un usuario más.<br>
            Cuando el número sea el deseado, pulsa GRABAR.
        </b></p>
    </div>

    <div class="imagenes" style="border: 2px solid black; padding: 5px; margin-top:10px;">
        <?php addImage($contador); ?>
    </div>

    <form method="POST" style="margin-top:10px;">
        <button type="submit" name="incrementar">INCREMENTAR</button>
        <button type="submit" name="grabar">GRABAR</button>
    </form>

</body>
</html>
