<?php

require_once 'Calculator.php';

$calc = new Calculator(2, 1, "+");

$calc2 = new Calculator(4, 2, "-");

$calc3 = new Calculator(4, 4, "*");

$calc4 = new Calculator(25, 5, "/");

//wrong
$calc5 = new Calculator(25, 5, "f");

echo $calc->calculate() . PHP_EOL;

echo $calc2->calculate() . PHP_EOL;

echo $calc3->calculate() . PHP_EOL;

echo $calc4->calculate() . PHP_EOL;

echo $calc5->calculate() . PHP_EOL;
