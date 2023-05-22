let agente = navigator.userAgent;
let sistema = navigator.platform;
let version = navigator.appVersion;
let memoria = navigator.deviceMemory;
let lenguaje = navigator.language;
let carga = location.protocol === "file:" ? "local" : "online";
let pdf = typeof window["PDFJS"] !== "undefined" ? "sí" : "no";
let bateria = navigator.getBattery ? "desconocido" : "no compatible";

if (navigator.getBattery) {
    navigator.getBattery().then(function(bateria) {
        let nivel = bateria.level * 100;
        if (bateria.charging && nivel < 25) {
            document.body.innerHTML = "<h1>Batería baja</h1>";
        } else {
            document.getElementById("agente").textContent = agente;
            document.getElementById("sistema").textContent = sistema;
            document.getElementById("version").textContent = version;
            document.getElementById("memoria").textContent = memoria + " GB";
            document.getElementById("lenguaje").textContent = lenguaje;
            document.getElementById("carga").textContent = carga;
            document.getElementById("pdf").textContent = pdf;
            document.getElementById("bateria").textContent = nivel + "%";
        }
    });
} else {
    document.getElementById("agente").textContent = agente;
    document.getElementById("sistema").textContent = sistema;
    document.getElementById("version").textContent = version;
    document.getElementById("memoria").textContent = memoria + " GB";
    document.getElementById("lenguaje").textContent = lenguaje;
    document.getElementById("carga").textContent = carga;
    document.getElementById("pdf").textContent = pdf;
    document.getElementById("bateria").textContent = bateria;
}
