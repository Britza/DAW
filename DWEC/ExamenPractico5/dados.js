let dado1 = Math.floor(Math.random() * 6) + 1;
console.log("Dado 1: ", dado1)
let dado2 = Math.floor(Math.random() * 6) + 1;
console.log("Dado 2: ", dado2)

if (dado1 < dado2) {
    console.log(`Gana el dado 1 con ${dado1}`);
} else if (dado2 < dado1) {
    console.log(`Gana el dado 2 con ${dado2}`);
} else {
    console.log(`Empate con ${dado1}`);
}
