let array =[4,5,6,9,8];
for (let i=0; i<array.length; i++){
    switch (i){
        case 0:
            console.log("Elemento numero 4");
            break;
        case 1:
            console.log("Elemento numero 5");
            break;
        case 2:
            console.log("Elemento numero 6");
            break;
        case 3:
            console.log("Elemento numero 9");
            break;
        case 4:
            console.log("Elemento numero 8");
            break;

        default:
            console.log("Elemento desconocido");
    }
}