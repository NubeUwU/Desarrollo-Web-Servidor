<?PHP

$string = "This is a sentence with seven words";

$array1 = explode(' ',$string);
$array2 = [4, 9, 98, 29, 50];

sort($array1, SORT_STRING);
sort($array2, SORT_NUMERIC);

echo "Array Numerico: ";
    foreach ($array2 as $valor){
        echo $valor . " ";
    }

echo "<br>";

echo "Array String: ";
    foreach ($array1 as $valor){
        echo $valor . " ";
    }


?>
