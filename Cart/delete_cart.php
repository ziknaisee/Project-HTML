<?php
session_start();

if (isset($_POST['item_key'])) {
    $key = $_POST['item_key'];

    if (isset($_SESSION['cart'][$key])) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // reindex the array
    }
}

header("Location: cart.php");
exit();
?>
