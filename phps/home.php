<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/slider.css">
    <link rel="stylesheet" href="../estilos/pantallaNegra.css">
    <link rel="stylesheet" href="../estilos/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>BCGGames - Inicio</title>
</head>
<body>
<?php include '../controladores/navbar.php'; ?>
    <!-- Slider de Bootstrap -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/slider1.jpg" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../img/slider2.jpg" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../img/slider3.jpg" class="d-block w-100" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../img/slider4.jpg" class="d-block w-100" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../img/slider5.jpg" class="d-block w-100" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../img/slider6.jpg" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Sección de Lo Más Vendido -->
    <div id="colum1" class="mt-4">
    <h2>Lo más vendido</h2>
    <div class="card-group mx-auto">
        <div class="card">
            <img src="../img/demonsouls.jpg" class="card-img-top" alt="Producto 1">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Demon's Souls</h5>
                <p class="card-text">Plataforma: PS5
                </p>
                <a href="../phps/demonPagar.php" class="btn btn-primary mt-auto">Comprar</a>
            </div>
        </div>
        <div class="card">
            <img src="../img/zeldatotk.jpg" class="card-img-top" alt="Producto 2">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">The Legend of Zelda Tears Of The Kindom</h5>
                <p class="card-text">Plataforma: Nintendo Switch</p>
                <a href="../phps/zePagar.php" class="btn btn-primary mt-auto">Comprar</a>
            </div>
        </div>
        <div class="card">
            <img src="../img/haloinfinite.jpg" class="card-img-top" alt="Producto 3">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Halo Infinite</h5>
                <p class="card-text">Plataforma: Xbox One/Series X/Series S</p>
                <p class="card-text text-danger">¡Agotado!</p>
            </div>
        </div>
        <div class="card">
            <img src="../img/deadoralive.jpg" class="card-img-top" alt="Producto 4">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Dead or Alive Xtreme 3 Fortune</h5>
                <p class="card-text">Plataforma: PS4</p>
                <p class="card-text text-danger">¡Agotado!</p>
            </div>
        </div>
    </div>
</div>

    <!-- Sección de Pagar con Ethereum -->
    <div id="pagar-con-ethereum-ventajas" class="container mt-4">
        <h2>¿Por qué Pagar con Ethereum?</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="../img/eth.png" class="img-fluid custom-image-size" alt="Imagen Paso 1">
            </div>
            <div class="col-md-8">
                <p>Pagar con Ethereum en BCGGames ofrece diversas ventajas:</p>
                <ul>
                    <li>Transacciones rápidas y seguras.</li>
                    <li>Menores costos de transacción en comparación con otros métodos de pago.</li>
                    <li>Acceso a un sistema financiero descentralizado.</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="colum2" class="container mt-4">
        <div class="row">
            <div class="col-md-8">
            <h2>Variedad de Contenido</h2>
                <p>Disfruta del catalago de videojuegos enorme que no sabras ni por donde empezar.
                   Contamos con videojuegos de varias plataformas y precios, desde los juegos clasicos hasta los
                   recien lanzados, no esperes más y continua disfrutando de tu gran pasatiempo.
                </p>
            </div>
            <div class="col-md-4">
                <img src="../img/variedaddejuegos.jpg" class="img-fluid custom-image-size" alt="Otra Imagen">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
