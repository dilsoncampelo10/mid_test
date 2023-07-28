<?php

function tableNumber($n)
{
    if (is_numeric(($n))) {
        for ($i = 1; $i <= 10; $i++) {
            $result = $n * $i;
            echo "$n x $i = $result" . PHP_EOL;
        }
    } else {
        echo "Not number";
    }
}

$number = readline("Enter a number: ");

tableNumber($number);
