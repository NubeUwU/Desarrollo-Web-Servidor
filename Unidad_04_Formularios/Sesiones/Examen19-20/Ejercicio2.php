<?php
session_start();

// <----- Funciones ----->

// Función que crea los valores de existencia de las cartas
function crearInicial(){
    $array = [];
    for($i=0; $i<4; $i++){
        $array[$i] = rand(0,1);
    }
    return $array;
}

// Función que muestra las cartas según su valor decimal
function mostrarCartas($array, $exponentes){
    for ($i=0; $i<4; $i++){
        if ($array[$i] == 0){
            echo "<img src='Img/0.jpg'>";
        } else {
           echo "<img src='Img/{$exponentes[$i]}.jpg' alt='carta{$exponentes[$i]}'>";
        }
    }
}


// <----- Main ----->

// Inicializamos un array si no existe
if(!isset($_SESSION['array'])){
    $_SESSION['array'] = crearInicial();
}

$array = $_SESSION['array'];
$exponentes = [8,4,2,1];


echo "<h1>Adivina el número en decimal</h1>";
echo "El número en binario es: <strong>" . implode('', $array) . "</strong><br><br>";

// Mostramos las cartas
mostrarCartas($array, $exponentes);

// Formulario
echo <<<_END
<br><br>
<form method="post" action="Ejercicio21.php">
    <label for="numero">Resultado:</label>
    <input type="number" name="resultado" required>
    <button type="submit">Comprobar Solución</button>
</form>
_END;

?>
