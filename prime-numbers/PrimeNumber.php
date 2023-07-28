<?php

$isPrimeNumber = verifyPrimeNumber(10);

echo $isPrimeNumber ? 'Prime Number' : 'Nop' ;

echo "\n";

var_dump(getFirstTenPrimes());


function verifyPrimeNumber($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}


function getFirstTenPrimes()
{
    $primes = [];
    $number = 2;

    while (count($primes) < 10) {
        if (verifyPrimeNumber($number)) {
            $primes[] = $number;
        }
        $number++;
    }

    return $primes;
}
