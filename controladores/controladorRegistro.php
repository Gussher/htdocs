<?php
if(!empty($_POST["btnregistrar"])){
if (empty($_POST["nombre"]) or empty($_POST["apellidos"]) or empty($_POST["usuario"]) or empty($_POST["pais"]) or empty($_POST["estado"]) or empty($_POST["correoElectronico"]) or empty($_POST["password"])){
    echo '<div class="alert alert-danger"> Uno de los campos esta vacios</div>';
}
else {
    $nombre= $_POST["nombre"];
    $apellidos= $_POST["apellidos"];
    $usuario= $_POST["usuario"];
    $pais= $_POST["pais"];
    $estado= $_POST["estado"];
    $correo= $_POST["correoElectronico"];
    $pass= $_POST["password"];
    $sql=$conexion->query(" insert into usuarios(nombre,apellidos,usuario,correo_electronico,contrasena,pais,estado)values('$nombre','$apellidos','$usuario','$correo','$pass','$pais','$estado')");
  if ($sql==1) {
    echo '<div class="success"><h3>Usuario Registrado correctamente</h3></div>';
    header("location: ../phps/login.php");
  } else {
    echo '<div class="alerta"><h3>Error al registrar usuario</h3></div>';
  }
 }
}
?>