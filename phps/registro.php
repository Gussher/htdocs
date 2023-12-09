<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../estilos/registro.css">
</head>
<body>
    <div class="container">
        <form id="registroForm" action="" method="post" enctype="multipart/form-data">
            <h2>Registro de Usuario</h2>
            <?php
            include("../controladores/conexiondb.php");
            include("../controladores/controladorRegistro.php");
            ?>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="nickname">Nombre de usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais">

            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado">

            <label for="correoElectronico">Correo Electrónico:</label>
            <input type="email" id="correoElectronico" name="correoElectronico" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="btnregistrar" class="btn" value="registra">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="../phps/login.php">Inicia sesión aquí</a>.</p>
    </div>
</body>
</html>
