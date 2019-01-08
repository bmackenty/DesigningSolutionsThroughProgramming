<?php
// This file should be named user_edit_process.php
session_start();
include('database_inc.php');

// we should santize this stuff below

$email = $_POST['email'];
$username = $_POST['username'];
$id_to_edit = $_SESSION['id_to_edit'];

// we are going to ignore password for right now
// because there is a weird thing about it
// $password = $_POST['password'];

$result = mysqli_query($connect,"UPDATE users SET email = '$email', username = '$username' 
WHERE id like $id_to_edit;");

header('location:users.php');

?>
