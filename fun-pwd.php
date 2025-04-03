<?php

$password = readLine("inserisci la password: ");

function CheckFirstRule($password) {

    if(strlen($password) >= 8) {

        return true;
    }
    else {
        echo "La password deve avere almeno 8 caratteri\n";

        return false;
    }
}

// $firstRule = checkFirstRule($password);

// var_dump($firstRule);



function checkSecondRule($password) {
    for($i = 0; $i < strlen($password); $i++) {

        if(is_numeric($password[$i])) {
    
            return true;
        }
        
        echo "La password deve avere almeno un numero\n";

        return false;
    }
}

// $secondRule = checkSecondRule($password);

// var_dump($secondRule);



function checkThirdRule($password) {

    for($i = 0; $i < strlen($password); $i++) {

        if(ctype_upper($password[$i])) {
    
            return  true;
        }
    }

    echo "La password deve avere almeno carattere maiuscolo\n";

    return false;
}

// $thirdRule = checkThirdRule($password);

// var_dump($thirdRule);



function checkFourthRule($password) {

    $specialCHars = ["!", "@", "#", "&", "+"];

    for($i = 0; $i < strlen($password); $i++) {

        if(in_array($password[i], $specialChars)) {

            return true;
        }
    }
    echo "La password deve avere almeno carattere speciale\n";
    return false;
}

// $fourthRule = checkFourthRule($password);

// var_dump($fourthRule);



function checkPassword() {
    $password = readLine("Inserisci la password: ");

    $firstRule = CheckFirstRule($password);
    $secondRule = checkSecondRule($password);
    $thirdRule = checkThirdRule($password);
    $fourthRule = checkFourthRule($password);

    if($firstRule && $secondRule && $thirdRule && $fourthRule) {

        echo "La password è valida\n";
    }
    else {
        echo "La password non è valida bro1n";
    }
}

checkPassword();


// SELFWORK


do {

    $password = readline("Inserisci la password: ");

    if (!preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%&*])[A-Za-z0-9@#$%&*]{8,}$/', $password)) {

        echo "La password non è valida. Deve rispettare le seguenti regole:\n";

        echo "- Deve essere lunga almeno 8 caratteri\n";

        echo "- Deve contenere almeno una lettera maiuscola\n";

        echo "- Deve contenere almeno un numero\n";

        echo "- Deve contenere almeno un carattere speciale (!@#$%^&*)\n";

    } 
    else {
        echo "La password è valida\n";

        break; 
    }

}
while (true);

