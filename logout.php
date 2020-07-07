<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

// Destroy Cookies Session
setcookie("Username", "", time() - 3600, "/");

header('Location:login.php');
?>

</body>
</html>