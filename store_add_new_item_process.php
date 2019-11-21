<?php 
// This file should be named store_add_new_item_process.php 

include('database_inc.php');

$quantity = $_POST['quantity'];
$size = $_POST['size'];
$description = $_POST['description'];
$category = $_POST['category'];
$image = $_POST['image'];
$price = $_POST['price'];

$result = mysqli_query($connect,
    "INSERT INTO `items` 
    (`quantity`, `size`, `description`, `category`, `image`, `price`) 
    VALUES ('$quantity', '$size', '$description','$category','$image','$price');");


?>

<a href="inventory.php">Click here to go back to inventory</a>
