<?php
session_start();
include 'config.php';

$conn = new mysqli($sname, $uname, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];
    $session_id = session_id();

    $sql = "SELECT * FROM cart WHERE session_id='$session_id' AND item_id='$item_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "UPDATE cart SET quantity = quantity + 1 WHERE session_id='$session_id' AND item_id='$item_id'";
    } else {
        $sql = "INSERT INTO cart (session_id, item_id) VALUES ('$session_id', '$item_id')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Item added to cart";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
