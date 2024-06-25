<?php
include 'db_connect.php';

$sql = "SELECT id, category, item_name, price FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="path/to/your/css/styles.css">
</head>
<body>
    <div class="row featured__filter">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6 mix ' . strtolower($row["category"]) . '">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/item/' . strtolower(str_replace(' ', '-', $row["item"])) . '.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <form action="Cart/add_cart.php" method="get">
                                    <input type="hidden" name="item" value="' . $row["item"] . '">
                                    <input type="hidden" name="price" value="' . $row["price"] . '">
                                    <button type="submit">BUY</button>
                                </form>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">' . $row["item"] . '</a></h6>
                            <h5>RM ' . $row["price"] . '</h5>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo '<p>No items found</p>';
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
