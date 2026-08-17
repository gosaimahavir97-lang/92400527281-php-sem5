<?php

$num = "100";

echo "Original Value: " . $num . "<br>";
echo "Original Type: " . gettype($num) . "<br><br>";


// Convert string to integer
settype($num, "integer");

echo "After Type Casting:<br>";
echo "Value: " . $num . "<br>";
echo "Type: " . gettype($num) . "<br>";

?>