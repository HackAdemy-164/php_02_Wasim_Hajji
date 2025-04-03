<?php

//ESERCIZIO 1: verificare se la password inserita dall'utente è valida secondo i seguenti parametri

    // 1. deve essere lunga almeno 8 caratteri
    // 2. deve contenere almeno un numero
    // 3. deve avere almeno un carattere in UPPERCASE
    // 4. deve contenere almeno un carattere speciale

$firstRule = false;
$secondRule = false;
$thirdRule = false;
$fourthRule = false;

// FIRST RULE

$password = readLine("inserisci la password: ");

if(strlen($password) >= 8) {

    $firstRule= true;

    echo "La paswword inserita soddisfa i requisiti di lunghezza\n";

}
else {

    echo "hai sbagliato uagliù";

}

var_dump($firstRule);


// SECOND RULE

for($i = 0; $i < strlen($password); $i++) {

    if(is_numeric($password[$i])) {

        $secondRule = true;
    }
}


var_dump($secondRule);


// THIRD RULE

for($i = 0; $i < strlen($password); $i++) {

    if(ctype_upper($password[$i])) {

        $thirdRule = true;
    }
}

var_dump($thirdRule);


// FOUTH RULE

$specialCHars = ["!", "@", "#", "&", "+"];

for($i = 0; $i < strlen($password); $i++) {

    if(preg_match('/[^a-zA-Z0-9]/', $password)) {

        $fourthRule = true;
    }
}

var_dump($fourthRule);