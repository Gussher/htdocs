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
        <img src="../img/zeldatotk.jpg" alt="Imagen del producto">
        <h2>The Legend of Zelda Tears Of The Kindom</h2>
        <p>Plataforma: Nintendo Switch</p>
        <p class="price-text">Precio a pagar:</p>
        <p class="price"><span class="icon"><img src="../img/eth.png" class= "eth-icon" alt="Icono personalizado"></span> 2 ETH</p>
        <button id="payButton" class="pay-button">Pagar</button>
      </div>
      <div id="status"></div>
    </div>
  </div>

  <script type="text/javascript" src="../scripts/zeMetamask.js"></script>
</body>
</html>