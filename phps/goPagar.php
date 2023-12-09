<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>BCGGames-Pagar</title>
  <?php include '../controladores/navbar.php'; ?>
  <link rel="stylesheet" href="../estilos/tarjetaPago.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/web3@1.6.0/dist/web3.min.js"></script>
</head>
<body>
  <div class="content">
    <div class="card-container">
      <div class="card">
        <img src="../img/godofwarragnarok.jpg" alt="Imagen del producto">
        <h2>God of War Ragnarok</h2>
        <p>Plataforma: PS4/PS5</p>
        <p class="price-text">Precio a pagar:</p>
        <p class="price"><span class="icon"><img src="../img/eth.png" class= "eth-icon" alt="Icono personalizado"></span> 1.5 ETH</p>
        <button id="payButton" class="pay-button">Pagar</button>
      </div>
      <div id="status"></div>
    </div>
  </div>

  <script type="text/javascript" src="../scripts/goMetamask.js"></script>
</body>
</html>