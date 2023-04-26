function copia(s) {
    let palabras = s.split(" ");
    if (palabras.length > 2) {
        return palabras[1].replace(/\s/g, "");
    } else {
        return "";
    }
}

let resultado = copia("Hola mundo loco");
console.log(resultado);