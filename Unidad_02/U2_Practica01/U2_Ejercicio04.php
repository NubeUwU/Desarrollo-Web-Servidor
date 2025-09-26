<?PHP

$num1 = rand(0,10);
$num2 = rand(0,10);

if ($num1>$num2){
    echo "El número 1 '" . $num1. "' es mayor que el número 2 '" . $num2 . "'";

}else if ($num2>$num1){
    echo "El número 2 '" . $num2 . "' es mayor que el número 1 '" . $num1 . "'";

}else{
    echo "El número 1 '" . $num1. "' es igual que el número 2 '" . $num2 . "'";
}


?>