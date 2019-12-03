<?php 

# this file should be named store_delete_item_process.php

include('database_inc.php');

$item_to_delete = $_GET['id'];

$result = mysqli_query($connect,"DELETE FROM items WHERE id = '$item_to_delete';");


header('location:store_control_panel.php');
?>
