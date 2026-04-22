<?php
/*
Fes un programa que faci servir almenys un parell de constants màgiques.
*/

function sum(int $a, int $b) {
    
    $total = $a + $b;

    echo $total . " is the result of the function " . __FUNCTION__ . "<br>";
}

function subtract(int $a, int $b) {
    
    $total = $a - $b;

    echo $total . " is the result of the function " .__FUNCTION__ . "<br>";
}

sum(5, 6);
subtract(5, 6);

echo "The line number where this constant is executed: " . __LINE__ . "<br>";

echo "The full path and filename of the file is: " . __FILE__ . "<br>";

echo "The directory of the file is: " . __DIR__ . "<br>";



?>