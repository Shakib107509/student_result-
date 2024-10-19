<?php
function calculateResult($marks) {
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.";
            return;
        }
    }

    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Fail - Student scored below 33 in one or more subjects.";
            return;
        }
    }

    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    $grade = '';
    switch (true) {
        case $averageMarks >= 81 && $averageMarks <= 100:
            $grade = "A+";
            break;
        case $averageMarks >= 71 && $averageMarks < 80:
            $grade = "A";
            break;
        case $averageMarks >= 61 && $averageMarks < 70:
            $grade = "A-";
            break;
        case $averageMarks >= 51 && $averageMarks < 60:
            $grade = "B";
            break;
        case $averageMarks >= 41 && $averageMarks < 50:
            $grade = "C";
            break;
        case $averageMarks >= 33 && $averageMarks < 40:
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    echo "Total Marks: $totalMarks <br>";
    echo "Average Marks: " . number_format($averageMarks, 2) . "<br>";
    echo "Grade: $grade";
}

$marks = [45, 76, 64, 55, 92]; 

calculateResult($marks);
?>
