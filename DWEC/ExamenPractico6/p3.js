let coordenadas;
let altitud;
let precision;
let mapa;
let historial = [];

let estimar = document.getElementById("estimar");
let seguir = document.getElementById("seguir");
let coordenadasEl = document.getElementById("coordenadas");
let altitudEl = document.getElementById("altitud");
let precisionEl = document.getElementById("precision");
let mapaEl = document.getElementById("mapa");
let historialEl = document.getElementById("historial");

estimar.addEventListener("click", function() {
    navigator.geolocation.getCurrentPosition(function(posicion) {
        coordenadas = posicion.coords.latitude + ", " + posicion.coords.longitude;
        altitud = posicion.coords.altitude;
        precision = posicion.coords.accuracy;
        mapa = "https://www.google.com/maps?q=" + coordenadas;
        coordenadasEl.textContent = coordenadas;
        altitudEl.textContent = altitud;
        precisionEl.textContent = precision;
        mapaEl.href = mapa;
        mapaEl.style.display = "inline";
    });
});

seguir.addEventListener("click", function() {
    let intervalo = setInterval(function() {
        navigator.geolocation.getCurrentPosition(function(posicion) {
            let fecha = new Date().toLocaleString();
            let item = document.createElement("li");
            item.textContent = fecha + ": " + posicion.coords.latitude + ", " + posicion.coords.longitude + " (" + posicion.coords.accuracy + ")";
            historial.push(item.textContent);
            historialEl.appendChild(item);
            localStorage.setItem("historial", JSON.stringify(historial));
        });
    }, 10000);
});
