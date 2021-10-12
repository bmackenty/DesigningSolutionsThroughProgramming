<?php 

// this file should be named store_update_edited_item.php

$description = $_POST['description'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$category = $_POST['category'];
$size = $_POST['size'];
$image = $_POST['image'];
$item_to_edit = $_POST['item_to_edit'];

include('database_inc.php');



$result = mysqli_query($connect, "UPDATE items
SET description = '$description', 
price = '$price',
quantity = '$quantity',
category = '$category',
size = '$size',
image = '$image'
WHERE id LIKE $item_to_edit;");



header('location:store_index.php');

?>
