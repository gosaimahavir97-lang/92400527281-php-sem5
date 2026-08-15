//Write a PHP Program to reverse an array values entered by user.
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter array values separated by comma:
    <input type="text" name="values">
    <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = $_POST["values"];

    $array = explode(",", $input);

    $array = array_map("trim", $array);

    $reverse = array_reverse($array);

    echo "<h3>Reverse Array:</h3>";

    foreach ($reverse as $value) {
        echo $value . "<br>";
    }
}
?>

</body>
</html>