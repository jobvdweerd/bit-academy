let havermelk = 0;
for (let i = 2; i < process.argv.length; i++) {
    if (process.argv[i] == "havermelk") {
        havermelk += 1;
    }
}

console.log(`Aantal havermelk: ${havermelk}`);