<?php

$fat = readline("Enter number to calculate factorial: ");
$result = calculateFactorial($fat);
echo "Factorial of " . $fat . " is " . $result . "\n";

function calculateFactorial($f)
{
    if ($f === 0 || $f === 1) {
        return 1;
    }
    return $f * calculateFactorial($f - 1);
}
