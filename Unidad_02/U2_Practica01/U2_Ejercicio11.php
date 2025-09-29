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

// Calculamos la suma de las diagonales principales
for ($i = 0; $i < $tamañoArray; $i++){
    $diagPrincipal += $miArray[$i][$i]; // Principal
    $diagSecundaria += $miArray[$i][$tamañoArray - 1 -$i]; // Secundaria
}

// Mostramos el resultado por pantalla
echo "La suma de la diagonal principal es: " . $diagPrincipal . "<br>La suma de la diagonal secundaria es: " . $diagSecundaria;

?>