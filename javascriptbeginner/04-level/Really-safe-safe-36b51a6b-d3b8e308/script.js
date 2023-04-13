let attempt = process.argv[2];
let pin = process.argv[3];
let bestuur = process.argv[4];
let dag = process.argv[5];
let uur = process.argv[6];

let optijd = (dag <= 3 && uur <= 17);
let telaat = (dag > 3 && uur > 17);
let bevoegd = bestuur == "bestuur" || (bestuur == "administratief medewerker" && optijd);

console.log(`#fouten: ${attempt}, pin: ${pin}, functie: ${bestuur}, dag: ${dag}, tijd: ${uur}`);
if (attempt > 4) {
    console.log(`kluis is geblokkeerd`);
} else if (bevoegd) {
    if (pin == "123752") {
        console.log(`kluis opent`);
        if ((bestuur != "bestuur")) {
            console.log(`sms naar bestuur`);
        }
    } else {
        console.log('verkeerde pincode');
    }
} else if (telaat) {
    console.log(`alarm gaat af`);
} else {
    console.log("stil alarm gaat af");
}
