<?php
session_start();
include 'config.php';

$conn = new mysqli($sname, $uname, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$session_id = session_id();

$sql = "SELECT items.item, items.price, cart.quantity FROM cart JOIN items ON cart.item_id = items.id WHERE cart.session_id='$session_id'";
$result = $conn->query($sql);

$total = 0;

echo "<h1>Shopping Cart</h1>";
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        $item_total = $row['price'] * $row['quantity'];
        $total += $item_total;
        echo "<tr>
                <td>{$row['item']}</td>
                <td>RM {$row['price']}</td>
                <td>{$row['quantity']}</td>
                <td>RM $item_total</td>
              </tr>";
    }
    echo "<tr>
            <td colspan='3'>Total</td>
            <td>RM $total</td>
          </tr>
          </table>";
    echo "<a href='proceed_to_payment.php'>Proceed to Payment</a>";
} else {
    echo "Your cart is empty.";
}

$conn->close();
?>
