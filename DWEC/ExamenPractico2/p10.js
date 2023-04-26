function contar(s) {
    if (s === '') {
        return 0;
    } else {
        return s.length;
    }
}

let resultado = contar('Hola mundo');
console.log(resultado);

resultado = contar('');
console.log(resultado);