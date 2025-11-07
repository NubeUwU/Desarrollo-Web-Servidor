<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form method="POST" action="consulta.php">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave" required>
        <br><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
