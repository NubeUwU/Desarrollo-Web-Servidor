<?PHP
session_start();

if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
    $_SESSION['nombre'] = $_POST['nombre'];

echo <<<_END

<form action="Ejemplo_Formulario_Session1_Resultado.php" method="post">
<label for="jugador1">Jugador 1: </label>
<input type="text" name="jugador1">
<br><br>


<label for="jugador2">Jugador 2: </label>
<input type="text" name="jugador2">
<br><br>


<label for="jugador3">Jugador 3: </label>
<input type="text" name="jugador3">
<br><br>

<button type="submit">Ver</button>

_END;

}else echo "Error, no se ha recibido ningun dato";


?>