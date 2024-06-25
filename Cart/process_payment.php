<?php
session_start();

// Here, add your payment processing logic. For now, we'll just clear the checkout table.

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "mydb";


// Create connection
$conn = new mysqli($sname, $uname, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM checkout";

if ($conn->query($sql) === TRUE) {
    echo "Payment successful. Checkout table cleared.";
    // You can redirect the user to a success page or the homepage
    header("Location: success.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
