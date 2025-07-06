window.addEventListener('resize', function () {
    if (window.innerWidth < 1500) { // Mínimo ancho permitido
        window.resizeTo(1500, window.innerHeight);
    }
    if (window.innerHeight < 1000) { // Mínimo alto permitido
        window.resizeTo(window.innerWidth, 1000);
    }
});
