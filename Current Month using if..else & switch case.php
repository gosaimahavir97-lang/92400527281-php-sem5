<?php

// Get current month number
$month = date("n");

echo "<h3>Using if..else</h3>";

if ($month == 1) {
    echo "Current Month is January";
} elseif ($month == 2) {
    echo "Current Month is February";
} elseif ($month == 3) {
    echo "Current Month is March";
} elseif ($month == 4) {
    echo "Current Month is April";
} elseif ($month == 5) {
    echo "Current Month is May";
} elseif ($month == 6) {
    echo "Current Month is June";
} elseif ($month == 7) {
    echo "Current Month is July";
} elseif ($month == 8) {
    echo "Current Month is August";
} elseif ($month == 9) {
    echo "Current Month is September";
} elseif ($month == 10) {
    echo "Current Month is October";
} elseif ($month == 11) {
    echo "Current Month is November";
} else {
    echo "Current Month is December";
}

echo "<br><br>";

echo "<h3>Using switch case</h3>";

switch ($month) {
    case 1:
        echo "Current Month is January";
        break;

    case 2:
        echo "Current Month is February";
        break;

    case 3:
        echo "Current Month is March";
        break;

    case 4:
        echo "Current Month is April";
        break;

    case 5:
        echo "Current Month is May";
        break;

    case 6:
        echo "Current Month is June";
        break;

    case 7:
        echo "Current Month is July";
        break;

    case 8:
        echo "Current Month is August";
        break;

    case 9:
        echo "Current Month is September";
        break;

    case 10:
        echo "Current Month is October";
        break;

    case 11:
        echo "Current Month is November";
        break;

    case 12:
        echo "Current Month is December";
        break;

    default:
        echo "Invalid Month";
}

?>