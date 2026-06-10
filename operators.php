<?php

$a = 20;
$b = 10;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

// Comparison Operator
if($a > $b)
{
    echo "$a is greater than $b <br>";
}

// Logical Operator
if($a > 5 && $b > 5)
{
    echo "Both numbers are greater than 5";
}

?>