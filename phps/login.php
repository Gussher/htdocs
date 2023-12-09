<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../estilos/login.css">
</head>
<body>
    <div class="container">
        <form id="loginForm" action="" method="post">
            <h2>Iniciar sesión</h2>
            <?php
            include("../controladores/conexiondb.php");
            include("../controladores/controladorLogin.php");
            ?>
            <label for="nickname">Usuario:</label>
            <input type="text" id="nickname" name="nickname" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="btningresar" class="btn" value="iniciar">Iniciar sesión</button>

            <p>¿No tienes una cuenta? <a href="../phps/registro.php">Haz clic aquí para registrarte</a>.</p>
        </form>
    </div>
</body>
</html>
