<?php
session_start();

if (isset($_POST['item_key'])) {
    $item_key = $_POST['item_key'];

    if (isset($_SESSION['cart'][$item_key])) {
        unset($_SESSION['cart'][$item_key]);
    }
}

header('Location: shoping-cart.php');
exit();
