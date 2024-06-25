<?php
// Include the configuration file for database connection
include 'price.php'; // Ensure this file has the correct database connection details

// Create a connection to the database
$conn = new mysqli($sname, $uname, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$dbname = "mydb";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database
$conn->select_db($dbname);

// Create the items table
$sql = "CREATE TABLE IF NOT EXISTS items (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(50) NOT NULL,
    item VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'items' created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data into the items table
$sql = "INSERT INTO items (category, item, price) VALUES
('Fruits', 'Banana: 500g', 2.00),
('Fruits', 'Oranges: 4 pcs', 6.00),
('Dairy', 'Barista Milk 1L', 12.00),
('Dairy', 'Low Fat Milk 1L', 6.00),
('Dairy', 'Farm Fresh Milk 2L', 12.00),
('Vegetables', 'Bawang Merah (Red Onion): 500g', 2.00),
('Vegetables', 'Cauliflower: 1 pcs', 5.00),
('Vegetables', 'Cucumber: 1 pcs', 0.80),
('Vegetables', 'Nips', 2.00),
('Essential', 'Egg: 6 pcs', 7.00),
('Essential', 'Beras (Rice): 1kg', 4.00),
('Cleaning Supplies', 'Floor Cleaner', 10.00),
('Cleaning Supplies', 'Daia Detergent', 9.00),
('Fresh Meat', 'Meat: 500g', 13.00),
('Fresh Meat', 'Chicken Fillet: 500g', 9.00),
('Fresh Meat', 'Ikan Bawal: 500g', 20.00),
('Beverages', 'Hausboom Strawberry', 4.00),
('Beverages', 'Hausboom Lemonade', 4.00),
('Health Care', 'Koolfever', 8.00),
('Health Care', 'Panadol: 1 pack', 5.00)";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully\n";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the connection
$conn->close();
?>
