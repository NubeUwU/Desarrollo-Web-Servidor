<?PHP

// Creamos un array en el que almacenar los numeros pares
$pares = [];

// Iteramos sobre el array para añadirle valores
for ($i = 1; count($pares) < 10; $i++ ){
    if ($i % 2 == 0){
        $pares[] = $i;
    }

}

// Mostramos los valores
for($pares as $valor){
    echo $valor . "<br>";
}

?>