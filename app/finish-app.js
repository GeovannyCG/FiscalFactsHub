function iniciarTemporizador() {
    var tiempoRestante = 10;
    var temporizadorElemento = document.getElementById("time");

    var intervalo = setInterval(function() {
        tiempoRestante--;
        temporizadorElemento.innerText = tiempoRestante;

        if (tiempoRestante <= 0) {
            clearInterval(intervalo);
            temporizadorElemento.innerText = "Redirigiendo...";
            setTimeout(function() {
                window.location.href = "./index.php"; // Cambiar por la URL de destino
            }, 1000);
        }
    }, 1000); // Actualizamos cada segundo (1000 milisegundos)
}

// Llamamos a la función cuando la página se carga
window.onload = iniciarTemporizador;