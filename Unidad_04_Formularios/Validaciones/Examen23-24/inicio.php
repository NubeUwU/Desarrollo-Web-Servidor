<?php
session_start();


/* FUNCIONES */

// Función para conectarse a la base de datos
function conectarBD() {
    $servername = "localhost";
    $username = "jugador";
    $password = "";
    $dbname = "jerogrifico";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    return $conn;
}


// Función para insertar o actualizar la solución del jugador
function insertSolucion($login, $solucion, $fecha, $hora) {
    $conn = conectarBD();

    // Insertamos la respuesta, si ya existe actualizamos hora y respuesta
    $sql = "INSERT INTO respuestas (fecha, login, hora, respuesta) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $fecha, $login, $hora, $solucion);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}



/* RECARGA */

// Procesamos el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviarSolucion"])) {

    // Si no esta setteado el usuario, se devuelve al login
    if(!isset($_SESSION["usuario"])) {
        header("Location: index.php");
        exit();
    }

    $login = $_SESSION["login"];
    $usuario = $_SESSION["usuario"];
    $solucion = $_POST["solucion"];
    $fecha = '2024-02-16';
    $hora = date('H:i:s');

    insertSolucion($login, $solucion, $fecha, $hora);
}
?>



<!----- CARGA ----->

<!----- HTML ----->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!</h1>

    <div style="display:flex; flex-direction:column;">
        <img src="./imagen/20240216.jpg" alt="Jeroglífico" style="max-width:300px;"><br>

        <form id="solucionForm" action="inicio.php" method="post"> 
            <label>Solución al jeroglífico</label>
            <input type="text" name="solucion">
            <button type="submit" name="enviarSolucion">Enviar</button>
        </form>
    </div>

    <br>
    <a href="puntos.php" style="color: black">Ver Puntos por Jugador</a><br>
    <a href="resultados.php" style="color: black">Resultados del Día</a>
</body>
</html>
