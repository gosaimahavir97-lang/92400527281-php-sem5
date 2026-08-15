//Write a PHP Program to merge to arrays.
<?php

$array1 = array(10, 20, 30);
$array2 = array(40, 50, 60);

echo "First Array:<br>";

foreach ($array1 as $value) {
    echo $value . " ";
}

echo "<br><br>";

echo "Second Array:<br>";

foreach ($array2 as $value) {
    echo $value . " ";
}

$merged = array_merge($array1, $array2);

echo "<br><br>";
echo "Merged Array:<br>";

foreach ($merged as $value) {
    echo $value . " ";
}

?>