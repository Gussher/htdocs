document.addEventListener('DOMContentLoaded', async () => {
  if (window.ethereum) {
    window.web3 = new Web3(window.ethereum);
    try {
      await window.ethereum.enable();
      initPayButton();
    } catch (err) {
      console.error('Usuario denegó el acceso a la cuenta', err);
      document.getElementById('status').innerHTML = 'Usuario denegó el acceso a la cuenta';
    }
  } else if (window.web3) {
    window.web3 = new Web3(window.web3.currentProvider);
    initPayButton();
  } else {
    document.getElementById('status').innerHTML = 'MetaMask (u otro proveedor Web3) no está instalado';
  }
});

const initPayButton = () => {
  document.getElementById('payButton').addEventListener('click', async () => {
    // Asigna un valor específico a la variable amount
    const amountEth = 0.4; // Precio a pagar

    const paymentAddress = '0xff404f979a0B39ee2e7867FB0697287a578ae88B';

    try {
      const accounts = await window.web3.eth.getAccounts();
      const userAddress = accounts[0];

      await window.web3.eth.sendTransaction({
        to: paymentAddress,
        value: window.web3.utils.toWei(amountEth.toString(), 'ether'),
        from: userAddress,
      });

      alert('Pago exitoso.');
    } catch (err) {
      console.error('Error al procesar el pago:', err.message);
      alert('Error al procesar el pago: ' + err.message);
    }
  });
};
