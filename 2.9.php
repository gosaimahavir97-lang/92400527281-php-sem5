<?php

$date = new DateTime("2026-08-13 15:25:40");


// 1. HOUR()
echo "1. HOUR(): ";
echo $date->format("H");

echo "<br><br>";


// 2. MINUTE()
echo "2. MINUTE(): ";
echo $date->format("i");

echo "<br><br>";


// 3. SECOND()
echo "3. SECOND(): ";
echo $date->format("s");

echo "<br><br>";


// 4. DATE_FORMAT()
echo "4. DATE_FORMAT(): ";
echo $date->format("d-m-Y");

echo "<br><br>";


// 5. DATE_SUB()
$newDate = clone $date;
$newDate->modify("-7 days");

echo "5. DATE_SUB(): ";
echo $newDate->format("Y-m-d");

?>