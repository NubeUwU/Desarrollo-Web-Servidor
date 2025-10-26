<?php
session_start();

$exponentes = [8,4,2,1]; // mismo orden que en el juego

// Comprobar que hay juego iniciado
if(!isset($_SESSION['array'])){
    echo "Error: no hay juego iniciado.";
    exit;
}

$array = $_SESSION['array'];

// Calcular el número decimal
$acierto = 0;
for($i=0;$i<4;$i++){
    $acierto += $array[$i] * $exponentes[$i];
}

// Comprobar el resultado enviado por el formulario
if(isset($_POST['resultado'])){
    $resultado = $_POST['resultado'];

    if($resultado == $acierto){
        echo "<h1>Respuesta acertada, el número es $acierto.</h1>";
    } else {
        echo "<h1>Has fallado. El número correcto era $acierto.</h1>";
    }

    // Enlace para volver a jugar
    echo '<br><a href="Ejercicio2.php?reiniciar=1">Volver a Jugar</a>';

    // Limpiamos la sesión para reiniciar juego
    session_unset();

} else {
    echo "No se envió ningún resultado.";
}
?>
