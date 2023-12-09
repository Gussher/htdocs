<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>BCGGames - Catálogo</title>
</head>
<body>
<?php include '../controladores/navbar.php'; ?>

<div id="colum1" class="mt-4">
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
                <p class="card-text">Descripción corta del producto.</p>
                <a href="../phps/zePagar.php" class="btn btn-primary mt-auto">Comprar</a>
            </div>
        </div>
        <div class="card">
            <img src="../img/haloinfinite.jpg" class="card-img-top" alt="Producto 3">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Halo Infinite</h5>
                <p class="card-text">Descripción corta del producto.</p>
                <p class="card-text text-danger">¡Agotado!</p>
            </div>
        </div>
        <div class="card">
            <img src="../img/deadoralive.jpg" class="card-img-top" alt="Producto 4">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Dead or Alive Xtreme 3 Fortune</h5>
                <p class="card-text">Descripción corta del producto.</p>
                <p class="card-text text-danger">¡Agotado!</p>
            </div>
        </div>
        <div class="card">
                <img src="../img/godofwarragnarok.jpg" class="card-img-top" alt="Producto 5">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">God of War Ragnarok</h5>
                    <p class="card-text">Plataforma: PS4/PS5</p>
                    <a href="../phps/goPagar.php" class="btn btn-primary mt-auto">Comprar</a>
                </div>
            </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
