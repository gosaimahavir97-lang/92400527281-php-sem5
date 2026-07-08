<?php
//Index array
//Single dimensional array
$array_one = array("One", "Two", "Three");
$array_two = array("Four", "Five", 6,3.2);

//Traversing an array
//Data Extraction

foreach($array_one as $index => $one)
{
    echo "$index - $one !";
    echo "<br>";
}

echo "<pre>";
print_r($array_one);
echo "</pre>";

// Array Functions
echo"<pre>";
print_r(array_push($array_one, "Four"));
echo "</pre>";

echo"<pre>";
print_r($array_one);
echo "</pre>";

echo"<pre>";
print_r(array_pop($array_one));
echo "</pre>";

echo"<pre>";
print_r($array_one);
echo "</pre>";

echo"<pre>";
print_r(array_merge($array_one, $array_two));
print_r($array_two);
echo "</pre>";

echo"<pre>";
print_r(array_keys($array_one));
echo "</pre>";

echo"<pre>";
print_r(array_flip($array_one));
echo "</pre>";

echo"<pre>";
print_r(array_values($array_one));
echo "</pre>";

?>