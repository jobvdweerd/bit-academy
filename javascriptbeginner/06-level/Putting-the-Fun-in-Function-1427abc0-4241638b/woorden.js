const woorden = ["The", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog"];

heeftletter(woorden, "o");
heeftletter(woorden, "p");
heeftletter(woorden, "q");


function heeftletter(lijst, letter) {
    for (let item of lijst) {
        if (item.includes(letter)) {
            console.log(`${item} bevat de letter ${letter}`);
        }
    }
}