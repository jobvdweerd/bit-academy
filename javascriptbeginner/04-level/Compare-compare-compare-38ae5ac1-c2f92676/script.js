let nederland = parseInt(process.argv[2]);
let duitsland = parseInt(process.argv[3]);
let frankrijk = parseInt(process.argv[4]);

let var1 = nederland < duitsland && nederland < frankrijk;
let var2 = (nederland > duitsland) || (frankrijk > duitsland);

console.log(`Nederland heeft minder inwoners dan Duitlsand en Frankrijk: ${var1}`);
console.log(`Nederland of Frankrijk heeft meer inwoners dan Duitlsand: ${var2}`);
console.log(`Het is niet waar dat Nederland meer inwoners heeft dan Duitsland: ${!(nederland > duitsland)}`);