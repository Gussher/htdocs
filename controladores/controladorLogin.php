<?php
if(!empty($_POST["btningresar"])){
if (empty($_POST["nickname"]) and empty($_POST["password"])){
    echo '<div class="alert alert-danger"> Los campos estan vacios</div>';
}
else {
    $usuario= $_POST["nickname"];
    $pass= $_POST["password"];
    $sql=$conexion->query(" select * from usuarios where usuario='$usuario' and contrasena = '$pass'");
  if ($datos=$sql-> fetch_object()) {
    session_start(); // Inicia la sesión si aún no se ha iniciado
    $_SESSION['usuario'] = $usuario; // Almacena el nombre de usuario en la sesión
    header("location: ../phps/home.php");
  } else {
    echo '<div class="alert alert-danger"><h3>Acceso denegado: Usuario no encontrado</h3></div>';
  }
 }
}
?>