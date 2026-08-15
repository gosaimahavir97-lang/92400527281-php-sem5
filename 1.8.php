//Write a PHP Program to print the values of array entered by user.

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter array values separated by comma:
    <input type="text" name="values">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = $_POST["values"];

    $array = explode(",", $input);

    echo "<h3>Array Values:</h3>";

    foreach ($array as $value) {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>