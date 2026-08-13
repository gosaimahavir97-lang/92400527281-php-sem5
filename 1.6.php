//Write a PHP program to print 15 to 20 using While and Do While.
<?php
    // Using While loop
    echo "Using While loop:\n";
    $i = 15;
    while ($i <= 20) {
        echo $i . "\n";
        $i++;
    }

    // Using Do While loop
    echo "\nUsing Do While loop:\n";
    $j = 15;
    do {
        echo $j . "\n";
        $j++;
    } while ($j <= 20);
?>