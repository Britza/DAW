let tareas = [];
let lista = document.getElementById("lista");
let agregar = document.getElementById("agregar");

agregar.addEventListener("click", function() {
    let tarea = document.getElementById("tarea").value.trim();
    if (tarea.length > 0) {
        tareas.push(tarea);
        actualizarLista();
        document.getElementById("tarea").value = "";
        if (tareas.length === 10) {
            document.getElementById("tarea").disabled = true;
            agregar.disabled = true;
            alert("Ya tienes 10 tareas en la lista");
        }
    }
});

function actualizarLista() {
    lista.innerHTML = "";
    for (let i = 0; i < tareas.length; i++) {
        let tarea = tareas[i];
        let elemento = document.createElement("div");
        let texto = document.createTextNode(tarea);
        elemento.appendChild(texto);
        if (i < 10) {
            let boton = document.createElement("button");
            boton.textContent = "Terminado";
            boton.addEventListener("click", function() {
                elemento.style.textDecoration = "line-through";
                boton.disabled = true;
            });
            elemento.appendChild(boton);
        }
        lista.appendChild(elemento);
    }
}
