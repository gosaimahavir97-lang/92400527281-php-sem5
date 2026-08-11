//Write a PHP program to find out maximum and minimum number
<?php
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;

    $max = max($num1, $num2, $num3);
    $min = min($num1, $num2, $num3);

    echo "Maximum number: " . $max . "\n";
    echo "Minimum number: " . $min . "\n";
?>