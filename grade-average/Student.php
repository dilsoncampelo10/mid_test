<?php

class Student
{
    private $name;
    private $grades;

    public function __construct($name, $grades)
    {
        $this->name = $name;
        $this->grades = $grades;
    }

    public function calculateAverage()
    {
        $totalGrades = count($this->grades);
        $sumGrades = array_sum($this->grades);
        
        return $sumGrades / $totalGrades;
    }
}
