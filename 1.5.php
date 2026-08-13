//Write a PHP program to print 5 to 10 using For and ForEach.
<?php
    // Using For loop
    echo "Using For loop:\n";
    for ($i = 5; $i <= 10; $i++) {
        echo $i . "\n";
    }

    // Using ForEach loop
    echo "\nUsing ForEach loop:\n";
    $numbers = array(5, 6, 7, 8, 9, 10);
    foreach ($numbers as $number) {
        echo $number . "\n";
    }
?>