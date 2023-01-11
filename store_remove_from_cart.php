<?php 
// This file should be named: store_remove_from_cart.php
session_start();
$item_to_remove = $_GET['item_id'];
$logged_in_id = $_SESSION['logged_in_id'];
include('database_inc.php');
$query_remove_item = mysqli_query($connect, "DELETE FROM cart WHERE item_id = '$item_to_remove' AND user_id = '$logged_in_id';");
header('Location: store_view_cart.php');
