<?php

// FUNZIONE : PORZIONE DI CODICE CHE PUò ESSERE ESEGUITA PIù VOLTE

// BUILT-IN FUNCTIONS: var_dump(), echo, print_r()

//USER FUNCTIONS : funzioni che creiamo noi programmatori


// function nomeFunzione($parametro) {

//     // il codice che deve essere eseguito quando invochiamo la funzione

// }


//invocazione della funzione

// nomeFunzione("ciao");

// function saluta() {

//     echo "Ciao a tutti\n";
// }

// saluta();

// ---------

// function sum($num1, $num2) {  //parametri formali

//     echo $num1 + $num2;
// }

// sum(3, 8);

// ---------

// const NUM = 5;

// function stampa() {
//     echo NUM;
// }

// stampa();

// ---------

// $val = 3;

// function increment($num) {
//     $num++;
//     echo $num;
// }

// echo $val . " \n";
// increment($val);
// echo $val . " \n";

// ---------

// PASSAGGIO PER RIFERIMENTO: QUSNDO PASSIAMO L'INDIRIZZO DI MEMORIA DELLA VARIABILE

// $val = 3;

// function increment($num) {
//     $num++;
//     echo $num;
// }

// echo $val . " \n"; // 3
// increment($val); // 4
// echo $val . " \n"; // 4

// ---------

//PARAMETRI DI DEFAULT

// function sum($a, $b = 3) {  

//     echo $a + $b;
// }

// sum(3);


//PARAMETRI VARIABILI

// function media($num1, $num2, $num3) {

//     echo "la media è: " . ($num1 + $num2 + $num3) / 3; 

// }

// media(5, 2, 3);

// ---------------

// function media(...$numbers) {
//     $num = 0;

//     foreach($numbers as $number) {

//         $num += $numbers;
//     }

//     echo "La media dei numeri è: " . $num / count($numbers);

// }

// media(5, 2, 3, 6, 6);

// ----------------

// function sum(£num1, $num2) {

//     echo "Somma della funzione " . $num1 + $num2 . " \n";

// }

// $somma = sum(5, 2);

// echo "Valore della variabile " . $somma;



// function sum($num2, $num2) {

//     return $num1 + $num2;

// }

// $somma = sum(5, 2);
// echo "Valore della variabile " . $somma;

?>

























