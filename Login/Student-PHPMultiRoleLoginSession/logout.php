<?php  
session_start();
// Q1: Unset session when logout

session_unset();
session_destroy();
// Q2: Destroy session when logout

// Q3: After session is destroyed, redirect to index.php
header("Location: index.php");
?>
