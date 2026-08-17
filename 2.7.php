<?php

$str1 = "Hello";
$str2 = "World";


// 1. Length
echo "1. Length: ";
echo strlen($str1);

echo "<br><br>";


// 2. Concat
echo "2. Concat: ";
echo $str1 . $str2;

echo "<br><br>";


// 3. concat_ws()
echo "3. concat_ws(): ";
echo implode("-", array($str1, $str2, "PHP"));

echo "<br><br>";


// 4. trim(), rtrim(), ltrim()
$str = "   Hello PHP   ";

echo "4. Original String: [$str]<br>";
echo "trim(): [" . trim($str) . "]<br>";
echo "rtrim(): [" . rtrim($str) . "]<br>";
echo "ltrim(): [" . ltrim($str) . "]";

echo "<br><br>";


// 5. lpad(), rpad(), locate()
echo "5. Padding:<br>";

echo "Left Padding: " . str_pad("PHP", 10, "*", STR_PAD_LEFT);
echo "<br>";

echo "Right Padding: " . str_pad("PHP", 10, "*", STR_PAD_RIGHT);
echo "<br>";

echo "Locate PHP: " . strpos("I am learning PHP", "PHP");

?>