function valida_email(s) {
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(s);
}

let resultado = valida_email("ejemplo@dominio.com");
console.log(resultado); // true