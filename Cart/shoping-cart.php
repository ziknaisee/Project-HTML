<?php
session_start();

// Function to handle the removal of items from the cart
if (isset($_GET['remove_index'])) {
    $remove_index = $_GET['remove_index'];
    if (isset($_SESSION['cart'][$remove_index])) {
        unset($_SESSION['cart'][$remove_index]);
        // Reindex the array to maintain proper indices
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
        .delete-button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .delete-button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<h1>Shopping Cart</h1>

<?php
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo "<table>";
    echo "<tr><th>Item</th><th>Price (RM)</th><th>Action</th></tr>";
    $total = 0;
    foreach ($_SESSION['cart'] as $index => $item) {
        echo "<tr><td>" . htmlspecialchars($item['name']) . "</td><td>" . number_format($item['price'], 2) . "</td>";
        echo "<td><form action='shoping-cart.php' method='get'><input type='hidden' name='remove_index' value='$index'><button type='submit' class='delete-button'>Delete</button></form></td></tr>";
        $total += $item['price'];
    }
    echo "<tr><td><strong>Total</strong></td><td colspan='2'><strong>" . number_format($total, 2) . "</strong></td></tr>";
    echo "</table>";
} else {
    echo "<p>Your cart is empty.</p>";
}
?>

<a href="index.php">Back to shop</a>

</body>
</html>
