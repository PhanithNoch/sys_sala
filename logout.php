<?php
session_start();
$_SESSION = array(); // Unset all session variables
session_destroy(); // Destroy the session.
header("Location: login.php"); // Redirect to login page
exit;
?>