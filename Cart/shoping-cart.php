<?php
session_start();

// Function to add an item to the cart
function add_to_cart($name, $price) {
    $item = array(
        'name' => $name,
        'price' => $price
    );

    // Initialize cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add item to cart with a unique key
    $key = md5($name); // Generate a unique key (you can use a better method for key generation)
    $_SESSION['cart'][$key] = $item;
}

// Check if item was submitted from product listing page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['item']) && isset($_POST['price'])) {
        $itemName = $_POST['item'];
        $itemPrice = $_POST['price'];
        
        // Add item to cart
        add_to_cart($itemName, $itemPrice);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="path/to/your/css/styles.css">
    <style>
        /* Inline styles for demonstration; move these to your external CSS file */
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
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            vertical-align: middle;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #45a049;
        }
        .empty-cart {
            text-align: center;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Shopping Cart</h1>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price (RM)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $item) {
                        echo '
                        <tr>
                            <td>' . $item['name'] . '</td>
                            <td>' . $item['price'] . '</td>
                            <td>
                                <form action="delete_cart.php" method="post">
                                    <input type="hidden" name="item_key" value="' . $key . '">
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="3" class="empty-cart">Your cart is empty</td></tr>';
                }
                ?>
            </tbody>
        </table>
        <a href="shop-grid.html" class="button-back">BACK TO MENU</a>
    </div>
</body>
</html>
