<?php
// This file should be named user_edit_process.php
session_start();
include('database_inc.php');

// we should santize the stuf below:

$email = $_POST['email'];
$username = $_POST['username'];
$id_to_edit = $_SESSION['id_to_edit'];
$password = $_POST['password'];

if(!empty($password)) {
    $safe_password = password_hash($password,PASSWORD_DEFAULT);

    $result = mysqli_query($connect,"UPDATE users 
    SET email = '$email', username = '$username', password='$safe_password' 
    WHERE id like $id_to_edit;");

} else { 

    $result = mysqli_query($connect,"UPDATE users 
    SET email = '$email', username = '$username'
    WHERE id like $id_to_edit;");
}

header('location:users.php');
?>
