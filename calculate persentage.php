<?php

function calculatePercentage($sub1, $sub2, $sub3, $sub4, $sub5)
{
    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percentage = ($total / 500) * 100;

    return $percentage;
}

$percentage = calculatePercentage(80, 75, 90, 85, 70);

echo "Percentage: " . $percentage . "%";
?>