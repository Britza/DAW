let contador = document.getElementById("contador");
let tabla = document.getElementById("tabla").getElementsByTagName("tbody");

fetch("https://www.w3schools.com/xml/guestbook.asp")
    .then(response => response.text())
    .then(data => {
        let parser = new DOMParser();
        let xml = parser.parseFromString(data, "text/xml");
        let invitados = xml.getElementsByTagName("guestbook").getElementsByTagName("entry");
        contador.textContent = `Hay ${invitados.length} invitados`;
        for (let invitado of invitados) {
            let nombre = invitado.getElementsByTagName("name").textContent;
            let fecha = invitado.getElementsByTagName("date").textContent;
            let mensaje = invitado.getElementsByTagName("message").textContent;
            let fila = tabla.insertRow();
            let celdaNombre = fila.insertCell();
            let celdaFecha = fila.insertCell();
            let celdaMensaje = fila.insertCell();
            celdaNombre.textContent = nombre;
            celdaFecha.textContent = fecha;
            celdaMensaje.textContent = mensaje;
        }
    })
    .catch(error => {
        contador.textContent = "Error al cargar los datos";
        console.error(error);
    });