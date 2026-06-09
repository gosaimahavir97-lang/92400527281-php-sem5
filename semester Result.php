<?php

define("COLLEGE_NAME", "Marwadi University]]");

$student_name = "Mahavir";
$semester = "Semester 5";

$subject1 = 78;
$subject2 = 85;
$subject3 = 69;

$total = $subject1 + $subject2 + $subject3;
$percentage = $total / 3;

echo "<h2>" . COLLEGE_NAME . "</h2>";
echo "Student Name: " . $student_name . "<br>";
echo "Semester: " . $semester . "<br><br>";

echo "Subject 1 Marks: $subject1 <br>";
echo "Subject 2 Marks: $subject2 <br>";
echo "Subject 3 Marks: $subject3 <br><br>";

echo "Total Marks: $total <br>";
echo "Percentage: $percentage %";

?>