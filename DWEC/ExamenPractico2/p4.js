var c1="1AND1";
var c2="1AND0";
var c3 = "0AND1";
const prompt = require("prompt-sync")({sigint: true});

var codigo = prompt("Escribe un codigo:");

if (codigo === c1 || codigo === c2 || codigo === c3){
    console.log("1");
}else {
    console.log("0");
}