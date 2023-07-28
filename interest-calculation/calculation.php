<?php

function calculateInvestmentFinalValue($initialCapital, $interestRate, $investmentPeriodInMonths)
{
    if (is_numeric($initialCapital) && is_numeric($interestRate) && is_numeric($investmentPeriodInMonths)) {
        $interestRateDecimal = $interestRate / 100;

        $finalValue = $initialCapital * pow(1 + $interestRateDecimal, $investmentPeriodInMonths);

        $finalValue = round($finalValue, 2);

        return $finalValue;
    }

    return "fill in the fields correctly";
}

$initialCapital = readline("Enter the initial capital: ");
$interestRate = readline("Enter the interest rate (in percentage): ");
$investmentPeriodInMonths = readline("Enter the investment period (in months): ");

$finalValue = calculateInvestmentFinalValue($initialCapital, $interestRate, $investmentPeriodInMonths);

echo $finalValue . PHP_EOL;
