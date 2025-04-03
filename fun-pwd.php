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

            $fourthRule = true;
        }
    }
    echo "La password deve avere almeno carattere speciale\n";
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

?>