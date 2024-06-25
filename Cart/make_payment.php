<?php
session_start();

// Here, add your payment processing logic. For now, we'll just clear the cart.

$sname = "localhost";
$uname = "root";
$password = "";

// Q2: Assign database to $db_name
//     You can create a new database or just used the previous database mydb 
$db_name = "mydb";

// Create connection
$conn = new mysqli($sname, $uname, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Begin transaction
$conn->begin_transaction();

try {
    // Insert order summary
    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['price'];
    }

    $stmt = $conn->prepare("INSERT INTO orders (total_price, order_date) VALUES (?, NOW())");
    $stmt->bind_param("d", $total_price);
    $stmt->execute();
    $order_id = $stmt->insert_id;
    $stmt->close();

    // Insert order details
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, item, price) VALUES (?, ?, ?)");
    foreach ($_SESSION['cart'] as $item) {
        $stmt->bind_param("isd", $order_id, $item['name'], $item['price']);
        $stmt->execute();
    }
    $stmt->close();

    // Commit transaction
    $conn->commit();

    // Clear the cart
    $_SESSION['cart'] = [];

    $conn->close();
} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    $conn->close();
    die("Transaction failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        .button-back {
            display: block;
            width: 120px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .button-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Successful</h1>
        <p>Thank you for your purchase!</p>
        <a href="./shoping-cart.php" class="button-back">Back to Cart</a>
    </div>
</body>
</html>
