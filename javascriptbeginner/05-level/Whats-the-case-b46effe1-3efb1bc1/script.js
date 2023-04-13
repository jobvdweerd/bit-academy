let totaalbedrag = parseInt(process.argv[2]);
let dag = parseInt(process.argv[3]);

switch (dag) {
    case 0:
        console.log(`Totaalbedag is ${totaalbedrag}`);
        break;
    case 1:
        console.log(`Totaalbedrag is ${0.98 * totaalbedrag}`);
        break;
    case 2:
        console.log(`Totaalbedrag is ${0.97 * totaalbedrag}`);
        break;
    case 3:
        console.log(`Totaalbedrag is ${0.96 * totaalbedrag}`);
        break;
    case 4:
        console.log(`Totaalbedrag is ${0.995 * totaalbedrag}`);
        break;
    case 5:
        console.log(`Totaalbedrag is ${0.985 * totaalbedrag}`);
        break;
    case 6:
        console.log(`Totaalbedrag is ${0.95 * totaalbedrag}`);
        break;
    default:
        console.log(totaalbedrag);
}

