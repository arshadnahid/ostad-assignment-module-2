<?php
/*Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.*/


// Function to print the first n numbers in the Fibonacci series
function printFibonacci($n)
{
    $firstNumber = 0;
    $secondNumber = 1;

    echo "Fibonacci Series (first $n numbers): ";

    for ($i = 0; $i < $n; $i++) {
        if ($i <= 1) {
            $fibonacci = $i;
        } else {
            $fibonacci = $firstNumber + $secondNumber;
            $firstNumber = $secondNumber;
            $secondNumber = $fibonacci;
        }

        echo $fibonacci . " ";
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);

