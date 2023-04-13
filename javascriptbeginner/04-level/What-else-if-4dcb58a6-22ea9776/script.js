let getal = process.argv[2];

if (getal >= 1000) {
    console.log(`Megastad`);
} else if (getal >= 25) {
    console.log(`Stad`);
} else console.log("Dorp");