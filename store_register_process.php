<?php
// this file should be named store_register_process.php
include('database_inc.php');

// the lines below store the data submitted from a form (register.php) into variables
$email = $_POST['email'];
$password = $_POST['password'];

// because we never, ever, never, ever trust user input we santize it. 
// http://php.net/manual/en/mysqli.real-escape-string.php
// this replaces SQL characters with safe characters.
// it's not perfect, but it's better than nothing!!
$email = mysqli_real_escape_string($connect,$email);

// the line below creates an encryped password. 
// we encrypt passwords so if an EVIL HACKER accesses our database
// they can't see our passwords. These passwords are pretty difficult 
// to decipher
$safe_password = password_hash($password,PASSWORD_DEFAULT);


// the lines below execute an SQL query that insert
//  a new user into our users table.

$result = mysqli_query($connect,
    "INSERT INTO `users` 
    (`password`, `email`) 
    VALUES ('$safe_password', '$email');");
header('location:store_control_panel.php');
?>
