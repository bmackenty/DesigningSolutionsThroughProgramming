<?php 
// This file should be named store_login_process.php
session_start();
include('database_inc.php');

$email = $_POST['email'];
$password = $_POST['password'];

 
$query_users = mysqli_query($connect, "SELECT * FROM users WHERE email LIKE '$email';");
if(mysqli_num_rows($query_users) == 0) {
    $_SESSION['error_no_email'] = True;
    header('location:store_login.php');
} else {
    while($result_users = mysqli_fetch_array($query_users)){
        if(password_verify($password,$result_users['password'])){
                $_SESSION['logged_in'] = True;
                $_SESSION['logged_in_user'] = $result_users['email'];
                $_SESSION['logged_in_id'] = $result_users['id'];
                $_SESSION['logged_in_role'] = $result_users['role'];
                $_SESSION['secret_key'] = "7277";
                header('location:store_index.php');
            } else {
                $_SESSION['error_wrong_password'] = True;
                header('location:store_login.php');
            }
     
    }

}
