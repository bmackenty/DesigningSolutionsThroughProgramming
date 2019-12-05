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

// every user should have a very unique id connected to their account
// this is a little different than the unique id we use when creating a user
// it is technically possible that a user could have the same email and same database id
// ok, ok, it's unlikely, but still. We need to make sure a user authenticated in one site
// cannot access another with the same session variables (login = 1, for example)

$unique_id = uniqid($more_entropy = TRUE);

// the lines below execute an SQL query that insert
//  a new user into our users table.
// TODO: check if a duplicate email address exists.
// TODO: add last_logged_in

$result = mysqli_query($connect,
    "INSERT INTO `users` 
    (`username`, `password`, `email`, `role`, `unique_id`) 
    VALUES ('$username', '$safe_password', '$email', 'Member', '$unique_id');");

$_SESSION['registered_success'] = True;
header('location:index.php');
?>
