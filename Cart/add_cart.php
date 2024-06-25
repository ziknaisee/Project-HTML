<?php
session_start();

if (isset($_GET['item']) && isset($_GET['price'])) {
    $item = $_GET['item'];
    $price = $_GET['price'];

    $item = array(
        'name' => $item,
        'price' => $price
    );

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    array_push($_SESSION['cart'], $item);

    header("Location: cart.php");
    exit();
}
?>

