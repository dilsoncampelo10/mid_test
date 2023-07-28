<?php

require_once 'Calculator.php';

$calc = new Calculator(2, 1, "+");

$calc2 = new Calculator(4, 2, "-");

$calc3 = new Calculator(4, 4, "*");

$calc4 = new Calculator(25, 5, "/");

//wrong
$calc5 = new Calculator(25, 5, "f");

echo $calc->calculate()."\n";

echo $calc2->calculate()."\n";

echo $calc3->calculate()."\n";

echo $calc4->calculate()."\n";

echo $calc5->calculate()."\n";