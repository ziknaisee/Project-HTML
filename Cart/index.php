<?php
include 'db_connect.php';

$sql = "SELECT id, category, item, price FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store Items</title>
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
        h2 {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>

<h1>Grocery Store Items</h1>

<?php
if ($result->num_rows > 0) {
    $currentCategory = "";
    while($row = $result->fetch_assoc()) {
        if ($currentCategory != $row["category"]) {
            if ($currentCategory != "") {
                echo "</table>";
            }
            $currentCategory = $row["category"];
            echo "<h2>" . $currentCategory . "</h2>";
            echo "<table>";
            echo "<tr><th>Item</th><th>Price (RM)</th></tr>";
        }
        echo "<tr><td>" . $row["item"] . "</td><td>" . number_format($row["price"], 2) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>