<?php
// This file logs out a user.
// in order to destroy a session we must first open one!
// this page will redirect a user to index.php after logging out. 
// This file should be named logout.php

session_start();
session_unset();
session_destroy();

header('location:index.php');
?>

