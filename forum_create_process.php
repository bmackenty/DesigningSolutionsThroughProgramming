<?php 
// this file should be named forum_create_process.php
include('database_inc.php');


$forum_name = $_POST['forum_name'];
// As a security precaution, we want to CHANGE any characters which might 
// be misinterpreted by PHP or MYSQL. In general, you should always santize (clean)
// ANY user input. The two lines below santize the user input for forum_name: 
$forum_name = mysqli_real_escape_string($connect, $forum_name);
$forum_name =  filter_var($forum_name, FILTER_SANITIZE_STRING);

$forum_description = $_POST['forum_description'];
// As a security precaution, we want to CHANGE any characters which might 
// be misinterpreted by PHP or MYSQL. In general, you should always santize (clean)
// ANY user input. The two lines below santize the user input for forum_description:  
$forum_description = mysqli_real_escape_string($connect, $forum_description);
$forum_description = filter_var($forum_description, FILTER_SANITIZE_STRING);

// The instructions below insert the new record into the table named "forum". 
$query_create_new_forum = mysqli_query($connect, "INSERT INTO forum (`forum_name`, `forum_description`) 
VALUES ('$forum_name', '$forum_description');");

header('location:forum_create.php');

// This code displays every defined variable and error message.
// It's quite helpful when you are debugging. 

    //   echo "<pre>";
    //   print_r(get_defined_vars());
    //   echo "</pre>";


?>


