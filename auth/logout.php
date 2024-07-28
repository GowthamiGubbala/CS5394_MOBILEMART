<?php
session_start();  // Start session

// Unset all session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("Location: ../index.php");
exit();
?>