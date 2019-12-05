<?php
// This file logs out a user.
// in order to destroy a session we must first open one!
// this page will redirect a user to index.php after loggin out. 
// This file should be named logout.php



session_start();

if (isset($_SESSION['unique_id_of_logged_in_user'])) {

    $unique_id_of_logged_in_user = $_SESSION['unique_id_of_logged_in_user'];
    include('database_inc.php');
    $logout_query = mysqli_query($connect,"UPDATE users SET logged_in_now = 0 WHERE id = '$unique_id_of_logged_in_user';");

    // the code from 2 lines below is used from https://stackoverflow.com/questions/3989347/php-why-cant-i-get-rid-of-this-session-id-cookie
    $params = session_get_cookie_params();
    setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));


    session_unset();
    session_destroy();
}



header('location:index.php');
?>

