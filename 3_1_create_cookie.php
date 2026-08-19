<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    // Create cookie for 1 hour
    setcookie("username", $name, time() + 3600);

    echo "Cookie created successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie</h2>

<form method="post">
    Enter Name:
    <input type="text" name="name" required>
    <input type="submit" name="submit" value="Create Cookie">
</form>

</body>
</html>