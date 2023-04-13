let versheid = parseInt(process.argv[2]);
let brood = parseInt(process.argv[3]);
let vloer = parseInt(process.argv[4]);
let vrij = 0;
let open = 8;

console.log(`Dagrooster taken`);
console.log(`====================`);
for (let i = 8; i < 20; i++) {
    let taken = [];
    if ((i - open) % versheid == 0) {
        taken.push(`versheid groenten en fruit checken`);
    }
    if ((i - open) % brood == 0) {
        taken.push(`nieuw brood bakken`);
    }
    if ((i - open) % vloer == 0) {
        taken.push(`vloer schoonmaken`);
    }
    if (taken.length == 0) {
        taken.push(`vrij`);
        vrij++;
    }
    console.log(`${i}:00 - ${taken}`);
    taken = [];
}
console.log(`====================`);
console.log(`Uren vrij: ${vrij}`);