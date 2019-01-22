<?php 

    // This file should be named user_delete.php

    session_start();
    include('header.php');
    include('database_inc.php');
    include('access_control.php');

    $id_to_delete = $_GET['id'];
    $unique_id_of_logged_in_user = $_SESSION['unique_id_of_logged_in_user'];
    
    // we don't want a non-logged in user to access this page
    
    if ($access_control['role'] != "Administrator") {
        header('location:index.php');
    } else {

        // now we actually delete the user. 
        $result = mysqli_query($connect,"DELETE FROM users WHERE id='$id_to_delete';");
        header('location:users.php');
    }

?>
