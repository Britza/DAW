let formulario = document.getElementById("formulario");
let nombre = document.getElementById("nombre");
let apellidos = document.getElementById("apellidos");
let dni = document.getElementById("dni");
let edad = document.getElementById("edad");
let provincia = document.getElementById("provincia");
let enviar = document.getElementById("enviar");

nombre.addEventListener("input", function() {
    let valor = nombre.value.trim();
    let valido = /^[a-zA-Z]+$/.test(valor) && !valor.includes(" ");
    nombre.setCustomValidity(valido ? "" : "El nombre debe contener solo caracteres latinos habituales y no puede ser un nombre compuesto");
});

apellidos.addEventListener("input", function() {
    let valor = apellidos.value.trim();
    let valido = valor.length <= 40;
    apellidos.setCustomValidity(valido ? "" : "Los apellidos no pueden tener más de 40 caracteres");
    document.getElementById("apellidos-help").textContent = `${valor.length}/40`;
});

dni.addEventListener("input", function() {
    let valor = dni.value.trim();
    let valido = /^[0-9]{8}[A-Z]$/.test(valor);
    dni.setCustomValidity(valido ? "" : "El DNI debe tener 8 dígitos y una letra mayúscula al final");
});

provincia.addEventListener("input", function() {
    let valor = provincia.value.trim();
    let valido = ["A Coruña", "Lugo", "Ourense", "Pontevedra"].includes(valor);
    provincia.setCustomValidity(valido ? "" : "Debe seleccionar una provincia gallega");
});

formulario.addEventListener("input", function() {
    let valido = formulario.checkValidity();
    enviar.disabled = !valido;
});