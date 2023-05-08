let provincia = document.getElementById("provincia");
let mensaje = document.getElementById("mensaje");

let provincias = ["A Corunha", "Lugo", "Ourense", "Pontevedra"];

provincia.addEventListener("input", function() {
    let valor = provincia.value.trim();
    let valido = provincias.includes(valor);
    mensaje.textContent = valido ? "Ok" : "Revisa";
});

provincia.addEventListener("keydown", function(event) {
    if (event.key === "Tab") {
        event.preventDefault();
        let valor = provincia.value.trim();
        let sugerencias = provincias.filter(p => p.startsWith(valor));
        if (sugerencias.length === 1) {
            provincia.value = sugerencias;
            mensaje.textContent = "Ok";
        }
    }
});