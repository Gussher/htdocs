<!-- navbar.php -->
<link rel="stylesheet" href="../estilos/menu.css">
<nav>
    <div class="logo-container">
        <img src="../img/logo.png" alt="Logo de tu Sitio">
    </div>
    <a href="home.php">Inicio</a>
    <a href="catalago.php">Catálogo</a>
    <a href="acercade.php">Acerca de</a>
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        echo '<div class="dropdown">';
        echo '<a href="javascript:void(0);" class="right" onclick="toggleDropdown()">¡Hola ' . $_SESSION['usuario'] . '!</a>';
        echo '<div id="dropdownContent" class="dropdown-content">';
        echo '<a href="#" onclick="confirmLogout()">Cerrar Sesión</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</nav>

<script src="../scripts/navbar.js"></script>
