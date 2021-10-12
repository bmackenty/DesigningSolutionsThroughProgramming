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


header('location:store_index.php');
?>
