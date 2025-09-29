<?PHP

// Creamos el array y los localizadores
$importe = [32.583, 11.239, 45.781, 22.237];
$localizador1 = 1;
$localizador2 = 3;

// Iteramos sobre el array
for ($i = 0; $i < count($importe); $i++){
    
    // Si coincide con los localizadores, muestra el contenido
    if ($i == $localizador1 || $i == $localizador2){
        echo $importe[$i] . "<br>";
    }
}

?>