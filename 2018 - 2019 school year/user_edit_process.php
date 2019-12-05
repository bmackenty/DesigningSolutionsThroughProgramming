<?php
// This file should be named user_edit_process.php
session_start();
include('database_inc.php');

$email = $_POST['email'];
$username = $_POST['username'];
$id_to_edit = $_SESSION['id_to_edit'];
$password = $_POST['password'];
$role = $_POST['role'];

// Even though this page should only be used by an admin
// it's probably a good idea to sanitize

$email = mysqli_real_escape_string($connect,$email);
$username = mysqli_real_escape_string($connect,$username);
$role = mysqli_real_escape_string($connect,$role);


if(!empty($password)) {
    $safe_password = password_hash($password,PASSWORD_DEFAULT);

    $result = mysqli_query($connect,"UPDATE users 
    SET email = '$email', username = '$username', password='$safe_password', role='$role' 
    WHERE id like $id_to_edit;");

} else { 

    $result = mysqli_query($connect,"UPDATE users 
    SET email = '$email', username = '$username', role = '$role'
    WHERE id like $id_to_edit;");
}

header('location:users.php');
?>
