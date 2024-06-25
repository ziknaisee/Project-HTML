<?php  
session_start();

// Unset and destroy the session when logging out
session_unset();
session_destroy();

// Redirect to the shopping cart page after session is destroyed
header("Location: ../index.php");
exit();
?>
