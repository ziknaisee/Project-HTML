<?php

//Q1: establish connection to database using config.php
include 'db_conn.php';

//Q2: sql to create table
$sql = "CREATE TABLE users(
  id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  role ENUM ('user','admin') NOT NULL,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL, PRIMARY KEY(id)
)";

if($conn->query($sql) === TRUE){
  echo "Table MyGuests created successfully";
}else{
  echo "Error creating table: " . $conn->error;
}



mysqli_close($conn);
?>