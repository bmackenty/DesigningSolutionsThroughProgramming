<?php 
ob_start();
session_start();
include('database_inc.php');

// This file should be named forum_delete_process.php

// We don't want people to directly access this page. 
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
}

$forum_id = $_GET['forum_id'];
$query_delete_forum = mysqli_query($connect, "DELETE FROM `forum` WHERE id = '$forum_id';");
$query_delete_threads = mysqli_query($connect, "DELETE FROM `threads` WHERE parent_id = '$forum_id';");

header('location:forum_index.php');


