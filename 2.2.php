<!DOCTYPE html>
<html>
<body>

<h3>Sort an Array</h3>

<form method="post">
    Enter numbers separated by comma:
    <input type="text" name="numbers">
    <input type="submit" value="Sort">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numbers = $_POST["numbers"];

    // Convert string into array
    $arr = explode(",", $numbers);

    // Remove spaces
    $arr = array_map('trim', $arr);

    // Convert to numbers
    $arr = array_map('intval', $arr);

    sort($arr);

    echo "<br>Sorted Array: ";
    echo implode(", ", $arr);
}

?>

</body>
</html>