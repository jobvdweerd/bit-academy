const Nederland = process.argv[2];
const Duitsland = process.argv[3];
const Frankrijk = process.argv[4];

console.log(`Nederland en Duitsland zijn om hetzelfde bekend: ${Nederland == Duitsland}`);
console.log(`Nederland en Frankrijk zijn om hetzelfde bekend: ${Nederland == Frankrijk}`);
console.log(`Frankrijk en Duitsland zijn niet om hetzelfde bekend: ${Frankrijk != Duitsland}`);