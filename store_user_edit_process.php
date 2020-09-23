<?php 
// this file should be named store_user_edit_process.php
include('database_inc.php');

$email = $_POST['email'];
$user_to_edit = $_POST['user_to_edit'];

$check_for_duplicate_email = mysqli_query($connect, "SELECT * from users WHERE email = '$email';");

if (mysqli_num_rows($check_for_duplicate_email) == 0) {

    $result = mysqli_query($connect, "UPDATE users
    SET email = '$email'
    WHERE id LIKE '$user_to_edit';");
    header('location:store_control_panel.php');
} else {
    echo "I'm sorry, an email already exists!";
}
