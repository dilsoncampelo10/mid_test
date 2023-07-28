<?php


class Calculator
{
    private int $firstNumber;
    private int $secondNumber;
    private string $operation;

    public function __construct($firstNumber, $secondNumber, $operation)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operation = $operation;
    }

    public function calculate()
    {
        $result = $this->checkOperation($this->operation);

        return $result;
    }

    public function setFirstNumber($n): void
    {
        $this->firstNumber = $n;
    }

    public function getFirstNumber(): int
    {
        return $this->firstNumber;
    }

    public function setSecondtNumber($n): void
    {
        $this->secondNumber = $n;
    }

    public function getSecondNumber(): int
    {
        return $this->secondNumber;
    }

    public function setOperationNumber($o): void
    {
        $this->operation = $o;
    }

    public function getOpertationNumber(): string
    {
        return $this->operation;
    }

    private function checkOperation(string $o): int | string
    {
        $result = 0;
        switch ($o) {
            case $o === '+':
                $result = $this->firstNumber + $this->secondNumber;
                break;
            case $o === '-':
                $result = $this->firstNumber - $this->secondNumber;
                break;
            case $o === '*':
                $result = $this->firstNumber * $this->secondNumber;
                break;
            case $o === '/':
                $result = $this->firstNumber / $this->secondNumber;
                break;
            default:
                $result = 'operation not found';
        }

        return $result;
    }
}
