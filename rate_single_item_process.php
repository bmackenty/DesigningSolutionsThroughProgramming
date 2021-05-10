<?php 

// this file should be named rate_single_item_process.php

include('database_inc.php');

$id = $_GET['id'];
$action = $_GET['action'];

if($action == 'down'){

        $query_rate_down = mysqli_query($connect, "UPDATE items SET rating = rating -1 WHERE id = '$id';");

} else {

        $query_rate_up = mysqli_query($connect, "UPDATE items SET rating = rating +1 WHERE id = '$id';");

}

$header_location = "location:rate_single_item.php?id=" .$id;
header("$header_location");


    ?>
