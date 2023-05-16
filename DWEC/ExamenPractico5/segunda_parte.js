let a = [9,17,29,13,25,52];

let b = a.map(x => x * 2);
console.log(b);

let f1 = x => x + 4;
let c = a.map(f1);
console.log(c);

let d = a.filter(x => x < 20);
console.log(d);

let e = a.reduce((acc, x) => acc + x, 0) + 100;
console.log(e);