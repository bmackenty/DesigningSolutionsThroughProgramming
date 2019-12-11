<?php 

// this file should be named store_user_delete_process.php
// there are many security problems with this file, which will be fixed in future versions

$user_id_to_delete = $_GET['id'];

include('database_inc.php');

$result = mysqli_query($connect,"DELETE FROM users WHERE id = '$user_id_to_delete';");
header('location:store_user_control_panel.php');

?>
