<?PHP
// Suma de Diagonal Principal, Suma de Diagonal Secundaria. Un solo "for" para cada diagonal.

// Se carga un array de 4x4
$miArray= [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

// Creamos las variables para las sumas y el tamaño maximo del array
$diagPrincipal = 0;
$diagSecundaria = 0;
$tamañoArray = count($miArray);

// Calculamos la suma de la diagonal principal
for ($i = 0; $i < count($miArray); $i++){
    $diagPrincipal += $miArray[$i][$i];
}

// Calculamos la suma de la diagonal secundaria
for ($i = 0; $i < count($miArray); $i++){
    $diagSecundaria += $miArray[$i][$tamañoArray - 1 -$i];
}

// Mostramos el resultado por pantalla
echo "La suma de la diagonal principal es: " . $diagPrincipal . "<br>La suma de la diagonal secundaria es: " . $tamañoArray;

?>