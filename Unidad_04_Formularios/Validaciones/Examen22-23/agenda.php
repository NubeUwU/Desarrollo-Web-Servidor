<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="display:inline-block; border: 2px solid black; margin: 1px">
<?php

$cantidad = $_SESSION['contador'];

for ($i=1; $i <= $cantidad; $i++){
    echo <<<END
    <div style="border: 2px solid black">
    <form>

    <h5>Contacto {$i}</h5>

    <label>Nombre{$i}</label>
    <input type="name"><br>

    <label>Email{$i}</label>
    <input type="email"><br>

    <label>Telefono{$i}</label>
    <input type="telephone">
    END;
}

?>
</div>

<input type="submit">
</body>
</html>