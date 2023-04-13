function tax(geld) {
    let totaal = geld;
    let test = 0;
    let schijf = 0;
    if (geld - 10000 > 0) {
        geld -= 10000;
        test = 10000 * 0;
        schijf++;
    }
    if (geld - 20000 > 0 && schijf == 1) {
        geld -= 20000;
        test += (0.2 * 20000);
        schijf++;
    } else {
        test += geld * 0.2;
    }
    if (geld - 40000 > 0 && schijf == 2) {
        geld -= 40000;
        test += (0.5 * 40000);
        schijf++;
    } else if (schijf == 2) {
        test += geld * 0.5;
    }
    if (test > 0 && schijf == 3) {
        test += (0.9 * geld);
    }
    let taxen = (test / totaal) * 100;
    return taxen;
}
let income = process.argv[2];
if (income == undefined) {
    income = 97501 - 1;
    console.log(`income ${income}: effective tax: ${tax(income)}%`);
} else {
    console.log(`income ${income}: effective tax: ${tax(income)}%`);
}
