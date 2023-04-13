let pincode = process.argv[2];
let recht = process.argv[3];
let dag = process.argv[4];

if ((pincode == 123752) && (recht == "bestuur" || "administratief medewerker") && (dag !== 5 || 6)) {
    console.log(`Toegang verleend`);
}
if (pincode !== 123752 || recht == "overig") {
    console.log(`Verkeerde pincode of je hebt niet de juiste rechten`);
}
if (dag == 5 || dag == 6) {
    console.log(`Veiligheidsdiensten worden ingeschakeld`);
}