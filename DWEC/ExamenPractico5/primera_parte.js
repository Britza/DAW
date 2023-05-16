let f1 = function(n, m) {
    return n + m;
};

let f2 = (n, m) => n + m;

console.log(f1(3, 4)); 
console.log(f2(8, 7));

let calculadora = (param1, param2, operacion) => operacion(param1, param2);

let suma = (n, m) => n + m;
let resta = (n, m) => n - m;
let multi = (n, m) => n * m;

console.log(calculadora(3, 4, suma));
console.log(calculadora(8, 7, resta));
console.log(calculadora(3, 4, multi));