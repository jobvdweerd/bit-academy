let auto = process.argv[2];
let afval = process.argv[3];
let natuur = process.argv[4];


if (auto == "ja" && afval == "ja" && natuur > 25) {
    console.log(`Het is een milieuvriendelijke stad`);
} else if (auto == "nee" && afval == "nee" && natuur < 25) {
    console.log(`De stad moet omgevormd worden`);
} else console.log(`De stad heeft nog 2 ster(ren) nodig om milieuvriendelijk te zijn`);

