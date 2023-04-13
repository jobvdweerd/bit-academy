let rating = process.argv[2];
let natuur = process.argv[3];
let wegdek = process.argv[4];

console.log(`Rating ${rating} sterren, natuurgebied: ${natuur}%, autowegdek: ${wegdek} km`);
if (rating == 3 && natuur > 25) {
    console.log(`belastingkorting voor de inwoners`);
} else if (rating == 3) {
    console.log(`Subsidie voor aanleg van meer natuur`);
} else if (rating < 3 && wegdek > 200) {
    console.log(`Subsidie voor ombouwen autoweg naar fietsstraat`);
} else console.log(`Subsidie voor afvalinzameling`);
