<?php

require_once 'Student.php';

$studentName = "Dilson";

$grades = [7.0, 8.0, 9.5];

$student = new Student($studentName, $grades);

$average = $student->calculateAverage();

echo "Average of student " . $studentName . "'s grades: " . number_format($average,2) . PHP_EOL;
