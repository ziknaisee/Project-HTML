<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
        .button-back, .button-payment {
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
        .button-back:hover, .button-payment:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Checkout</h1>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price (RM)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        echo '
                        <tr>
                            <td>' . htmlspecialchars($item['name']) . '</td>
                            <td>RM ' . number_format($item['price'], 2) . '</td>
                        </tr>';
                        $total_price += $item['price'];
                    }
                } else {
                    echo '<tr><td colspan="2" class="empty-cart">Your cart is empty</td></tr>';
                }
                ?>
            </tbody>
        </table>
        <h2>Total Price: RM <?php echo number_format($total_price, 2); ?></h2>
        <a href="shoping-cart.php" class="button-back">Back to Cart</a>
        <a href="make_payment.php" class="button-payment">Make Payment</a>
    </div>
</body>
</html>
