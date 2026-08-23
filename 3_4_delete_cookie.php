<?php
// Delete cookie
setcookie("username", "", time() - 3600);

echo "Cookie deleted successfully.";
?>