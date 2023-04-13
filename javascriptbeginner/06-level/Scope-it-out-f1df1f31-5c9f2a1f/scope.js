let wachtwoord = "fout";
aanmelden(wachtwoord);

wachtwoord = "geheim";
aanmelden(wachtwoord);

function aanmelden(boodschap) {
    let bericht = "Er is niemand thuis";

    if (boodschap == "geheim") {
        bericht = "Welkom!";
    } else {
        bericht = "FOUT WACHTWOORD!";
    }
    console.log(bericht);
}

