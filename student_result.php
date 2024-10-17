<?php
// Function to calculate result
function calculateResult($subject1, $subject2, $subject3, $subject4, $subject5) {
    // Validate marks are within the range 0-100
    if (($subject1 < 0 || $subject1 > 100) || ($subject2 < 0 || $subject2 > 100) || 
        ($subject3 < 0 || $subject3 > 100) || ($subject4 < 0 || $subject4 > 100) || 
        ($subject5 < 0 || $subject5 > 100)) {
        echo "Mark range is invalid";
        return;
    }
    
    // Check if the student failed in any subject
    if ($subject1 < 33 || $subject2 < 33 || $subject3 < 33 || $subject4 < 33 || $subject5 < 33) {
        echo "The student has failed.";
        return;
    }
    
    // Calculate total and average marks
    $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $averageMarks = $totalMarks / 5;

    // grade based on the average using switch-case
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Output total marks, average, and grade
    echo "Total Marks: " . $totalMarks . "<br>";
    echo "Average Marks: " . $averageMarks . "<br>";
    echo "Grade: " . $grade;
}

// Example usage

$subject1 = 45;
$subject2 = 60;
$subject3 = 50;
$subject4 = 60;
$subject5 = 55;

calculateResult($subject1, $subject2, $subject3, $subject4, $subject5);

?>