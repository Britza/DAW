function cuenta_caracteres(c, s) {
    let contador = 0;
    for (let i = 0; i < s.length; i++) {
        if (s[i] === c) {
            contador++;
        }
    }
    return contador;
}

let resultado = cuenta_caracteres('o', 'Hola mundo, estoy en examen');
console.log(resultado);