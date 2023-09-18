<?php
/*
 * Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.
 * */


// Function to print even numbers in a range using a for loop
function printEvenNumbersUsingFor($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
    }
}

// Function to print even numbers in a range using a while loop
function printEvenNumbersUsingWhile($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

// Function to print even numbers in a range using a do-while loop
function printEvenNumbersUsingDoWhile($start, $end, $step)
{
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

// Call the functions to print even numbers
$start = 1;
$end = 20;
$step = 2;

echo "Using for loop: ";
printEvenNumbersUsingFor($start, $end, $step);

echo "<br>";

echo "Using while loop: ";
printEvenNumbersUsingWhile($start, $end, $step);

echo "<br>";

echo "Using do-while loop: ";
printEvenNumbersUsingDoWhile($start, $end, $step);

