<?php 

// This file should be named store_add_new_item_process.php 

include('database_inc.php');

// Assign the values from the form to variables

$quantity = $_POST['quantity'];
$size = $_POST['size'];
$description = $_POST['description'];
$category = $_POST['category'];
$image = $_POST['image'];
$price = $_POST['price'];

// Prevent SQL injection attacks by escaping special characters in the variables

$description = mysqli_real_escape_string($connect,$description); 
$category = mysqli_real_escape_string($connect,$category); 

// Insert the item's information into the "items" table in the database

$result = mysqli_query($connect,
    "INSERT INTO `items` 
    (`quantity`, `size`, `description`, `category`, `image`, `price`) 
    VALUES ('$quantity', '$size', '$description','$category','$image','$price');");

// Redirect the user to the store's index page

header('location:store_index.php');

?>
