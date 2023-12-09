// navbar.js
function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    dropdownContent.classList.toggle("show");
}

function confirmLogout() {
    var confirmLogout = confirm("¿Seguro que quieres cerrar sesión?");
    if (confirmLogout) {
        window.location.href = '../index.html';
    }
}
