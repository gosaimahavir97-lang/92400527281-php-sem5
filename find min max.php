<?php

$numbers = array(45, 78, 23, 91, 12, 67, 89);

// Assume first number is max and min
$max = $numbers[0];
$min = $numbers[0];

// Find maximum and minimum
foreach ($numbers as $num)
{
    if ($num > $max)
    {
        $max = $num;
    }

    if ($num < $min)
    {
        $min = $num;
    }
}

// Display output
echo "Numbers: " . implode(", ", $numbers) . "<br><br>";

echo "Maximum Number: " . $max . "<br>";
echo "Minimum Number: " . $min;

?>