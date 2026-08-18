<?php

// 1. CURDATE() / CURRENT_DATE
echo "1. CURDATE(): ";
echo date("Y-m-d");

echo "<br><br>";


// 2. CURTIME() / CURRENT_TIME()
echo "2. CURTIME(): ";
echo date("H:i:s");

echo "<br><br>";


// 3. UNIX_TIMESTAMP()
$timestamp = time();

echo "3. UNIX_TIMESTAMP(): ";
echo $timestamp;

echo "<br><br>";


// 4. FROM_UNIXTIME()
echo "4. FROM_UNIXTIME(): ";
echo date("Y-m-d H:i:s", $timestamp);

?>