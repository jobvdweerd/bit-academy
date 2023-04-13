function collatz(x) {
    let i;
    for (i = 0; x > 1; i++) {
        if (x % 2 == 0) {
            x /= x / 2;
        } else {
            x = x * 3 + 1;
        }
    }
    return i;
}

let getal = parseInt(process.argv[2]);
getal = collatz(getal);
getal = collatz(getal);
getal = collatz(getal);
console.log(getal);