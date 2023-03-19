<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="layout.css">
    <style>
    table, th, td {
      border:1px solid black;
      margin:10px;
    }
    </style>
</head>
<body >
<div class="w3-sidebar w3-bar-block" style="width:15% ">
    <a href="#intro" class="w3-bar-item w3-button ">Introduce</a>
    <a href="#locate" class="w3-bar-item w3-button">Location</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
  </div>
  <!-- Page Content -->
  
  
  <div class="w3-container" >
    <header style="padding-left: 15%;">
      Viet Nam
    </header>
<div style="margin-left:17%">
<?php
$server_name = "localhost";

//specify the username - here it is root
$user_name = "root";

//specify the password - it is empty
$password = "";

$database_name = "OnlineStore";
// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $user_name, $password,$database_name);
$query  = "SELECT  * FROM products";
$result = mysqli_query($connection, $query);

echo "<table border='2' width = '95% '>
<tr>
<th>Product name</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr >";
echo "<td >" .$row['Product_name']."</td>";
echo "<td >" .$row['Price']. "</td>"; 
echo "</tr>";
}

echo "</table>";

$connection->close()
?>
</div>
<footer style ="left: 15%;">
    <p>BK-HCMUT</p>
  </footer>
</body>
</html>