let totaal = parseInt(process.argv[2]);
console.log(`In totaal is er ${totaal} miljoen uitegegven`);
console.log(`De stad betaalt ${totaal % 3} miljoen`);
console.log(`De gemeente betaalt ${totaal - (totaal % 3)} miljoen`);
