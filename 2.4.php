<?php

$str = "Welcome to PHP Programming";

echo "<h3>String: $str</h3>";


// 1. strlen()
echo "1. strlen(): ";
echo strlen($str);

echo "<br><br>";


// 2. strpos()
echo "2. strpos(): ";
echo strpos($str, "PHP");

echo "<br><br>";


// 3. str_word_count()
echo "3. str_word_count(): ";
echo str_word_count($str);

echo "<br><br>";


// 4. strrev()
echo "4. strrev(): ";
echo strrev($str);

echo "<br><br>";


// 5. strtolower()
echo "5. strtolower(): ";
echo strtolower($str);

echo "<br><br>";


// 6. strtoupper()
echo "6. strtoupper(): ";
echo strtoupper($str);

?>