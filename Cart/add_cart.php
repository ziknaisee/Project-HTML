<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $item = $_GET['item'];
    $price = $_GET['price'];

    // Initialize cart if not set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add item to cart
    $_SESSION['cart'][] = ['name' => $item, 'price' => $price];

    // Redirect to the shopping cart page
    header("Location: ../shoping-cart.php");
    exit();
}
?>
