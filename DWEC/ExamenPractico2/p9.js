function suma(a,b){
    if(typeof b === 'undefined'){
        b=15;
    }
    return a + b;
}

resultado = suma(5);
console.log(resultado)