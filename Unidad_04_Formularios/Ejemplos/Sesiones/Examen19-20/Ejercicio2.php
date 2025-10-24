<?php

function crearInicial(){
    $array = [];
    for($i = 0; $i<4; $i++){
        $array[$i] = rand(0,1);
    }
    return $array;
}

function mostrarCartas($array, $exponentes){

    for ($i = 0; $i < 4; $i++) {

        if ($array[$i] == 0) {
            echo '<img src="DWES/Unidad_04_Formularios/Ejemplos/Sesiones/Examen19-20/Img/0.jpg">';
        } else {
            $valorImagen = $exponentes[$i];
            echo "<img src='DWES/Unidad_04_Formularios/Ejemplos/Sesiones/Examen19-20/Img/{$valorImagen}.jpg'>";
        }
    }
}


$exponentes = [1,2,4,8];
$array = crearInicial();

echo "<h1>Adivina el número en decimal</h1>";
echo "El número en binario es: " . implode('', $array);
echo "<br><br>";


mostrarCartas($array, $exponentes);

echo <<<_END

<form method="post"
<label for ="numero">
<input type="number" name="resultado">
<button type="submit">

_END;

?>