<?php
session_start();
include 'pintar-circulos.php';

echo "<h1>Introduzca la combinación</h1>";


// Recogemos la cantidad de circulos
$numCir = $_SESSION["numCir"];


// Array de colores posibles para los botones
$botones = ['red'=>'ROJO',
            'blue'=>'AZUL',
            'yellow'=>'AMARILLO',
            'green'=>'VERDE',
            'white' =>'BLANCO',
            'purple'=>'MORADO',
            'orange'=>'NARANJA',
            'pink'=>'ROSA'
            ];


// Inicializamos la jugada si no existe
if(!isset($_SESSION['jugada'])){
    $_SESSION['jugada'] = [];
}

// Procesamos el color pulsado
if(isset($_POST['color'])){
    // Añadimos el color pulsado a la jugada
    $_SESSION['jugada'][] = $_POST['color'];

    // Si ya se han pulsado la cancitdad de colores, redirigimos a acierto/fallo
    if(count($_SESSION['jugada']) == $numCir){
        header("Location: resultado.php");
        exit;
    }
}

// Creamos un array para los colores de los círculos
$circulos_usuario = [];

// Rellenamos los círculos según la jugada
for($i=0; $i< $numCir; $i++){
    if(isset($_SESSION['jugada'][$i])){
        $circulos_usuario[$i] = $_SESSION['jugada'][$i]; // color elegido
    } else {
        $circulos_usuario[$i] = 'black'; // círculo vacío
    }
}

// Pintamos los círculos
pintar_circulos($circulos_usuario);
?>

<br><br>

<!-- Botones de colores -->
<form method="post">
<?php
    // Creamos los botones
    foreach ($botones as $valor => $texto) {
        echo '<button type="submit" name="color" value="' . $valor . '">' . $texto . '</button>';
    }
?>
</form>

