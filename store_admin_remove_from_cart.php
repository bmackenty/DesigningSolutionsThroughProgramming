<?php 
// This file should be named: store_admin_remove_from_cart.php
// this file is meant to be used by admin or manager to remove items from carts


$order_id = $_GET['order_id'];
$logged_in_id = $_SESSION['logged_in_id'];
include('database_inc.php');
$query_remove_item = mysqli_query($connect, "DELETE FROM cart WHERE id = '$order_id';");
header('Location: store_all_open_orders.php');

// the code below is extraordinarily useful for debugging. Please use it often.
// echo "<pre>";
// print_r(get_defined_vars());
// echo "</pre>";
