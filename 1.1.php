//Write a PHP program for print Previous semester Result using variables & constants in PHP.
<?php
    define("SEMESTER", "Previous");
    $subject1 = 85;
    $subject2 = 90;
    $subject3 = 78;
    $total = $subject1 + $subject2 + $subject3;
    $average = $total / 3;
    echo "Semester: " . SEMESTER . "\n";
    echo "Subject 1: " . $subject1 . "\n";
    echo "Subject 2: " . $subject2 . "\n";
    echo "Subject 3: " . $subject3 . "\n";
    echo "Total: " . $total . "\n";
    echo "Average: " . $average . "\n";
?>