<?php

$arr = array(
    "Name" => "Mahavir",
    "Course" => "BCA",
    "City" => "Rajkot"
);

echo "<h3>1. array_change_key_case()</h3>";

print_r(array_change_key_case($arr, CASE_UPPER));

echo "<br><br>";

print_r(array_change_key_case($arr, CASE_LOWER));


echo "<h3>2. array_chunk()</h3>";

$months = array(
    "January", "February", "March",
    "April", "May", "June"
);

print_r(array_chunk($months, 2));


echo "<h3>3. array_count_values()</h3>";

$values = array("PHP", "HTML", "PHP", "CSS", "PHP", "HTML");

print_r(array_count_values($values));


echo "<h3>4. array_pop()</h3>";

$numbers = array(10, 20, 30, 40);

array_pop($numbers);

print_r($numbers);


echo "<h3>5. array_push()</h3>";

array_push($numbers, 50, 60);

print_r($numbers);


echo "<h3>6. array_unshift()</h3>";

array_unshift($numbers, 5);

print_r($numbers);


echo "<h3>7. array_shift()</h3>";

array_shift($numbers);

print_r($numbers);

?>