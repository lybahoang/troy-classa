<?php
// Resume the session.
session_start();

// Unset all session variables.
session_unset();

// Destroy the session.
session_destroy();

// Redirect to homepage.php.
header("Location: homepage.php");
exit();
?>