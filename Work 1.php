<?php
// Types of Function
// 1. Built-in Functions
// 2. UDF
// String Function are built-in functions.

$str1 = "Mahavir";
$str2 = "Gosai";

echo "echo" . " " . $str1 . " " . $str2  ;
echo "<br>";
print("print" . " " . $str1 . " " . $str2);
echo "<br>";
echo strlen($str1 . $str2 . 12);
echo "<br>";
echo strtoupper($str1);
echo "<br>";
echo strtolower($str1);
echo "<br>";
echo "Before trim" ;
echo strlen($str1 . $str2);
echo "<br>";
$timmedstring = rtrim($str1);

echo "After trim" ;
echo strlen($timmedstring . $str2);
echo "<br>";
echo str_replace("Mahavir", "Gosai", $str1);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strcmp("Hello","Hello");

echo "<br>";
echo ucfirst("i am Mahavir");

echo "<br>";
echo ucwords("i am Mahavir");

echo "<br>";

//strstr()

 echo strstr($str1, "a");
//stristr() - i stands for case insensitive data

echo "<br>";
echo stristr($str1, "A");
 
?>
