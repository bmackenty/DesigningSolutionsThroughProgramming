<?php 
ob_start();
session_start();
$forum_id = $_SESSION['forum_id'];

// This file should be named forum_new_thread_process.php

// We don't want people to directly access this page. 
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
}

include('database_inc.php');

$parent_id = $_POST['parent_id'];
$parent_id = mysqli_real_escape_string($connect, $parent_id);
$parent_id = filter_var($parent_id, FILTER_SANITIZE_STRING);

$thread_subject = $_POST['thread_subject'];
$thread_subject = mysqli_real_escape_string($connect, $thread_subject);
$thread_subject = filter_var($thread_subject, FILTER_SANITIZE_STRING);

$thread_body = $_POST['thread_body'];
$thread_body = mysqli_real_escape_string($connect, $thread_body);
$thread_body = filter_var($thread_body, FILTER_SANITIZE_STRING);

// we post the current date as the date of this thread. 
$thread_date = date("Y-m-d");

// If we want to put in the user who posted this thread: 

// $thread_owner_id = $_SESSION['logged_in_user_id];
// (this of course assumes you have a session variable named logged_in_user_id)
// for now, we are just going to use 9999 as a placeholder. 
// the database is configured that thread_owner is an integer (int), so please
// avoid using anything other than an int. 

$thread_owner_id = 9999;

// thread_status can be anything, but it should only be ONE thing. For example: 

// $thread_status = "sticky";
// $thread_status = "annoucement";
// $thread_status = "open";
// $thread_status = "closed";
// $thread_status = "to be reviewed";

// Avoid using:
// $thread_status = "sticky, open"; 

// just for now, we are going use a placeholder: 
$thread_status = "open";


$query_insert_new_thread = mysqli_query($connect, "INSERT INTO threads 
(parent_id, thread_subject, thread_body, thread_owner_id, thread_date, thread_status) 
VALUES ('$parent_id','$thread_subject','$thread_body','$thread_owner_id', '$thread_date', '$thread_status');");


// When we are done inserting a new thread we want to return the user back the page they 
// were just looking at. The problem is there could be different pages.
$from_thread = $_POST['from_thread'];

if($from_thread){
    $return_location = "Location:forum_thread_view.php?topic_id=$parent_id";
} else {
    $return_location = "Location:forum_view.php?forum_id=$forum_id";
}
header($return_location);


// Please leave this code here. If you need to debug problems, please uncomment the code below: 

// echo "<pre>";
// print_r(get_defined_vars());
// echo "</pre>";


