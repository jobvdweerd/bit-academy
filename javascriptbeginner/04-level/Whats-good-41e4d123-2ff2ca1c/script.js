let temperatuur = parseInt(process.argv[2]);
let neerslag = parseInt(process.argv[3]);
let laag = parseInt(process.argv[4]);

console.log(`Gemmiddelde temperatuur: ${temperatuur}C, neerslag: ${neerslag} ml, laagste temperatuur ${laag}C`);
console.log(`Het land is een warm land: ${(temperatuur > 20 && neerslag < 750) || !(laag < 10 && temperatuur < 25)}`);