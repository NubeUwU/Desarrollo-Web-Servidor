<?php
include login.php;
session_start();

function insertSolucion(){
    $conn = conectarBD();

    $login = $_SESSION["usuario"];
    $solucion = $_POST["solucion"];
    $fecha = '2024-02-16';
    $hora = date('H:i:s');

    $sql = "INSERT INTO respuestas (fecha, login, hora, respuesta) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $fecha, $login, $fecha, $solucion);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}
    
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviarSolucion"])) {
    insertSolucion();
}

if(!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!</h1>
    <div style:display:flex; flex-direction:column;>
        <img src="./imagen/20240216.jpg" alt="Jeroglífico" style="max-width:300px;"><br>
    <form id="solucionForm" action="inicio.php" method="post"> 
        <label>Solución al jeroglifico</label>
        <input type="text" name="solucion" form="solucionForm">
        <button type="submit" name="enviarSolucion">Enviar</button>
    </form>
    </div>
    <br>

    <a href="puntos.php" style="color: black">Ver Puntos por Jugador</a><br>
    <a href="resultados.php" style="color: black">Resultados del Dia</a>
</body>
</html>
