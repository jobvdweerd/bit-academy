let administratie = parseInt(process.argv[2]);
let infrastructuur = parseInt(process.argv[3]);
let evenementen = parseInt(process.argv[4]);
let totaal = parseInt(process.argv[5]);
console.log(`Aan administratie en infrastructuur is ${administratie + infrastructuur} miljoen uitgegeven`);
console.log(`De overige kosten zijn ${totaal - administratie - infrastructuur - evenementen} miljoen`);
console.log(`Administratie was goed voor ${(administratie / totaal) * 100}% van de uitgaven`);