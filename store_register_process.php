<?php
// this file should be named store_register_process.php
session_start();
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

// we need to see if there is a duplicate email address
// the first thing we need to do is see if their email 

$check_for_duplicate_email = mysqli_query($connect, "SELECT * from users WHERE email = '$email';");

if (mysqli_num_rows($check_for_duplicate_email) == 0) {

    $result = mysqli_query($connect,
    "INSERT INTO `users` 
    (`password`, `email`, `role`) 
    VALUES ('$safe_password', '$email', 'user');");
    header('location:store_login.php');

} else {

    // if we get here, it means the email address is already in the database
    // so we need to set a session variable to tell the user about the error 
    // and then send the user back to the register page
    
    $_SESSION['error_duplicate_email'] = True;
    header('location:store_register.php');

}

?>
