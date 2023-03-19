<?php
//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$user_name = "root";

//specify the password - it is empty
$password = "";

$database_name = "OnlineStore";
// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);

//$query = "CREATE DATABASE OnlineStore";
//mysqli_query($connection, $query)
//mysqli_close($connection);
//$query = "CREATE TABLE Users(
//  User_names varchar(224) PRIMARY KEY,
//  User_password varchar(224)
//)";
//$query = "CREATE TABLE Products(
//  Product_id INT(2) AUTO_INCREMENT PRIMARY KEY,
//  Product_name varchar(224),
//  Price INT(10)
//)";
//$query = "INSERT INTO Products(Product_name,Price) VALUES ('snack', '5000')";
//$query = "INSERT INTO Products(Product_name,Price) VALUES ('snack', '5000')";
//$query = "INSERT INTO Users(User_names,User_password) VALUES ('snack', MD5('thang2711'))";
//$query = "INSERT INTO Users(User_names,User_password) VALUES ('thag', MD5('27112002'))";
mysqli_query($connection, $query);
$connection->close()
?>