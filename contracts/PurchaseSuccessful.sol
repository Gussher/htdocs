// SPDX-License-Identifier: MIT
pragma solidity ^0.8.0;

contract PurchaseNotifier {
    event PurchaseSuccessful(address sender, address receiver, uint256 amount);

    function makePurchase(address payable _receiver) external payable {
        require(msg.value > 0, "La cantidad de ETH debe ser mayor que 0");
        require(_receiver != address(0));

        // Realiza la transferencia de Ether
        _receiver.transfer(msg.value);

        // Emite el evento indicando que la compra fue exitosa
        emit PurchaseSuccessful(msg.sender, _receiver, msg.value);
    }
}
