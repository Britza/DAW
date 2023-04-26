let parrafo1 = document.getElementById("parrafo_1");
let parrafo2 = document.getElementById("parrafo_2");

function cambiarColor() {
    parrafo1.style.color = "blue";
}

parrafo2.addEventListener("mouseover", function() {
    parrafo1.style.color = "red";
});