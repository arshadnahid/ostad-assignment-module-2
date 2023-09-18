<?php
/*Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
*/


$firstNumber = 0;
$secondNumber = 1;

echo "Fibonacci Numbers: ";

for ($i = 0; $i < 10; $i++) {
    if ($i <= 1) {
        $fibonacci = $i;
    } else {
        $fibonacci = $firstNumber + $secondNumber;
        $firstNumber = $secondNumber;
        $secondNumber = $fibonacci;
    }

    echo $fibonacci . " ";

    if ($fibonacci > 100) {
        break; // Break the loop if Fibonacci number exceeds 100
    }
}

