<?PHP

// Declaramos las variables e iniciamos un booleano
$n1 = rand(1,100);
$esPrimo = true;

// El número 1 no es primo
if ($n1 == 1){
    $esPrimo = false;
}

// Iteramos hasta la raiz de "n1" para buscar divisores
for ($i = 2; $i <= sqrt($n1); $i++){

    // Si no es primo cambia el booleano a false y finaliza el bucle
    if ($n1 % $i == 0) {
        $esPrimo = false;
        break;    
    }
}

// Mostramos el resultado
if ($esPrimo){
    echo "El número ".$n1." es primo.";

}else{
    echo "El número ".$n1." no es primo.";

}

?>