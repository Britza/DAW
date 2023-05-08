let texto = document.getElementById("texto");
let cargar = document.getElementById("cargar");

function cargarDatos() {
    fetch("https://api.chucknorris.io/jokes/random")
        .then(response => response.json())
        .then(data => {
            let fecha = new Date().toLocaleString();
            let enlace = `<a href="${data.url}" target="_blank">${data.value}</a>`;
            texto.innerHTML = `El texto ${enlace} se actualizo en la fecha ${fecha}`;
        })
        .catch(error => {
            texto.textContent = "Error al cargar los datos";
            console.error(error);
        });
}