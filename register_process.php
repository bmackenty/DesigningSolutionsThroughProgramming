<?php
// this file should be named register_process.php

include('database_inc.php');

// the lines below store the data submitted from a form
$email = $_POST['email'];
$password = $_POST['password'];

// the line below creates an encryped password. 
// we encrypt passwords so if an EVIL HACKER accesses our database
// they can't see our passwords. These passwords are pretty difficult 
// to decipher

$safe_password = password_hash($password,PASSWORD_DEFAULT);

// the lines below execute an SQL query that insert
//  a new user into our users table.
// TODO: check if a duplicate email address exists.

$username = "Member";

$result = mysqli_query($connect,
    "INSERT INTO `users` 
    (`username`, `password`, `email`) 
    VALUES ('$username', '$safe_password', '$email');");


?>

