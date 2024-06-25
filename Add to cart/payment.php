<?php
session_start();
include 'config.php';

$conn = new mysqli($sname, $uname, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$session_id = session_id();

$sql = "SELECT items.item, items.price, cart.quantity FROM cart JOIN items ON cart.item_id = items.id WHERE cart.session_id='$session_id'";
$result = $conn->query($sql);

$total = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $item_total = $row['price'] * $row['quantity'];
        $total += $item_total;
    }

    // Here you can handle the payment process

    // Clear the cart
    $sql = "DELETE FROM cart WHERE session_id='$session_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Order confirmed! Total amount to pay: RM $total";
    } else {
        echo "Error clearing cart: " . $conn->error;
    }
} else {
    echo "Your cart is empty.";
}

$conn->close();
?>
