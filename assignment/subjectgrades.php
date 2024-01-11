<?php
// Write a PHP program to enter marks of five subjects Physics, Chemistry,
// Biology, Mathematics and Computer, calculate percentage and grade by if
// else 

function Grade($physics, $chemistry, $biology, $math, $computer) {
    $totalMarks = $physics + $chemistry + $biology + $math + $computer;
    $percentage = ($totalMarks / 500) * 100;

    
    if ($percentage >= 90) {
        $grade = 'A';
    } elseif ($percentage >= 80) {
        $grade = 'B';
    } elseif ($percentage >= 70) {
        $grade = 'C';
    } elseif ($percentage >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    
    echo "Total Marks: $totalMarks\n<br>";
    echo "Percentage: $percentage%\n<br>";
    echo "Grade: $grade\n<br>";

}


$physics = 75;
$chemistry = 85;
$biology = 89;
$math = 75;
$computer = 90;

Grade($physics, $chemistry, $biology, $math, $computer);
?>