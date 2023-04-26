const prompt = require("prompt-sync")({sigint: true});
while (true) {
    var nombre = prompt("Escribe un nombre:");
    if (nombre === "pepe") {
        console.log("Acertaste");
    } else if (nombre === "salir") {
        break;
    } else {
        console.log("Prueba otra vez");
    }
}