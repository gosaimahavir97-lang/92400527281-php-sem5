<?php

$date = new DateTime("2026-08-13");

echo "Date: " . $date->format("Y-m-d");

echo "<br><br>";


// 1. DAYOFWEEK()
echo "1. DAYOFWEEK(): ";
echo $date->format("w") + 1;

echo "<br><br>";


// 2. WEEKDAY()
echo "2. WEEKDAY(): ";
echo $date->format("N") - 1;

echo "<br><br>";


// 3. DAYOFMONTH()
echo "3. DAYOFMONTH(): ";
echo $date->format("d");

echo "<br><br>";


// 4. DAYOFYEAR()
echo "4. DAYOFYEAR(): ";
echo $date->format("z") + 1;

echo "<br><br>";


// 5. DAYNAME()
echo "5. DAYNAME(): ";
echo $date->format("l");

?>