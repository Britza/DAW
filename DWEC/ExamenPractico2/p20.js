function valida_matricula(s) {
    let matriculaRegex = /^(([A-Z]{2}\d{4}[A-Z]{2})|(\d{4}[A-Z]{3}))$/;
    return matriculaRegex.test(s);
}

let resultado = valida_matricula("1234ABC");
console.log(resultado); // true