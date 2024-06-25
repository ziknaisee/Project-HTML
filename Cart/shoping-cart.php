<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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
            color: #333;
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
        .button-back, .button-checkout, .button-payment {
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
        .button-back:hover, .button-checkout:hover, .button-payment:hover {
            background-color: #0056b3;
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
                            <td>' . htmlspecialchars($item['name']) . '</td>
                            <td>RM ' . number_format($item['price'], 2) . '</td>
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
        <button type="button" onclick="window.location.href='../shop-grid.php'" class="button-back">Back To Menu</button>
        <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
            <button type="button" onclick="window.location.href='checkout.php'" class="button-checkout">Checkout</button>
        <?php endif; ?>
        <button type="button" onclick="window.location.href='confirmation.php'" class="button-payment">Make Payment</button>
    </div>
</body>
</html>
