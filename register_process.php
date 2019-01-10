<?php
session_start();
// this file should be named register_process.php

include('database_inc.php');

// the lines below store the data submitted from a form (register.php) into variables

$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

// because we never, ever, never, ever trust user input we santize it. 
// http://php.net/manual/en/mysqli.real-escape-string.php
// this replaces SQL characters with safe characters.
// it's not perfect, but it's better than nothing!!

$email = mysqli_real_escape_string($connect,$email);
$username = mysqli_real_escape_string($connect,$username);


// the line below creates an encryped password. 
// we encrypt passwords so if an EVIL HACKER accesses our database
// they can't see our passwords. These passwords are pretty difficult 
// to decipher

$safe_password = password_hash($password,PASSWORD_DEFAULT);

// the lines below execute an SQL query that insert
//  a new user into our users table.
// TODO: check if a duplicate email address exists.
// TODO: add last_logged_in

$result = mysqli_query($connect,
    "INSERT INTO `users` 
    (`username`, `password`, `email`, `role`) 
    VALUES ('$username', '$safe_password', '$email', 'Member');");

$_SESSION['registered_success'] = True;
header('location:index.php');

?>
