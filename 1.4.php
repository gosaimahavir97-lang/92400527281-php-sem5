//Write a PHP program to print current month using if..else& switch case.
<?php
    $month = date("n");

    if ($month == 1) {
        echo "Current month: January";
    } else if ($month == 2) {
        echo "Current month: February";
    } else if ($month == 3) {
        echo "Current month: March";
    } else if ($month == 4) {
        echo "Current month: April";
    } else if ($month == 5) {
        echo "Current month: May";
    } else if ($month == 6) {
        echo "Current month: June";
    } else if ($month == 7) {
        echo "Current month: July";
    } else if ($month == 8) {
        echo "Current month: August";
    } else if ($month == 9) {
        echo "Current month: September";
    } else if ($month == 10) {
        echo "Current month: October";
    } else if ($month == 11) {
        echo "Current month: November";
    } else if ($month == 12) {
        echo "Current month: December";
    }

    // Using switch case
    switch ($month) {
        case 1:
            echo "\nSwitch Case - Current month: January";
            break;
        case 2:
            echo "\nSwitch Case - Current month: February";
            break;
        case 3:
            echo "\nSwitch Case - Current month: March";
            break;
        case 4:
            echo "\nSwitch Case - Current month: April";
            break;
        case 5:
            echo "\nSwitch Case - Current month: May";
            break;
        case 6:
            echo "\nSwitch Case - Current month: June";
            break;
        case 7:
            echo "\nSwitch Case - Current month: July";
            break;
        case 8:
            echo "\nSwitch Case - Current month: August";
            break;
        case 9:
            echo "\nSwitch Case - Current month: September";
            break;
        case 10:
            echo "\nSwitch Case - Current month: October";
            break;
        case 11:
            echo "\nSwitch Case - Current month: November";
            break;
        case 12:
            echo "\nSwitch Case - Current month: December";
            break;
    }
?>