<?php 

    // This file should be named user_delete.php

    session_start();
    include('header.php');
    include('database_inc.php');

    $id_to_delete = $_GET['id'];
    $logged_in = $_SESSION['logged_in'];
    $email = $_SESSION['email'];
    $id_of_logged_in_user = $_SESSION['id_of_logged_in_user'];
    $role = $_SESSION['role'];
    
    // we don't want a non-logged in user to access this page
    
    if ($role != "Administrator") {
        header('location:index.php');
    } else {

    // we can't allow a user to delete themselves. Although we protect against this in 
    // users.php, it's possible to alter the URL so this is why we check again here. 

    if ($id_to_delete == $id_of_logged_in_user ) {
        $_SESSION['error_delete_yourself'] = True;
        header('location:users.php');
    } else {
        // now we actually delete the user. 
        $result = mysqli_query($connect,"DELETE FROM users WHERE id='$id_to_delete';");
        header('location:users.php');
    }
    }
?>
