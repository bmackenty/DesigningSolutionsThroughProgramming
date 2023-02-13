<?php

// this file should be named database_inc.php
//
// this file is used to open a connection to your database.
// Anytime you need to connect to a database, you must include this file. 
// 
// to setup this file, please find the email I sent with your account information (not moodle)
// you need to replace YOURUSERNAME with you username. You need to do this twice
// you need to replace YOURPASSWORD with your password. You only need to do this once.
// 
// There is a conditional statement on line 17 which, if $connect is NOT TRUE
// prints an error message helping us understand the reason why we could not connect 
// to the database

$connect = mysqli_connect("localhost","YOURUSERNAME","YOURPASSWORD","YOURUSERNAME");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
