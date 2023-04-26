function suma_digitos(n) {
    let suma = 0;
    let digitos = n.toString().split("");
    for (let i = 0; i < digitos.length && i < 5; i++) {
        suma += parseInt(digitos[i]);
    }
    return suma;
}

let resultado = suma_digitos(324);
console.log(resultado);