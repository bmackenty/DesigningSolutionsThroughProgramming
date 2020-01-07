<?php

// This file logs out a user.
// in order to destroy a session we must first open one!
// this page will redirect a user to index.php after loggin out. 
// This file should be named logout.php

session_start();

    $params = session_get_cookie_params();
    setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));
    session_unset();
    session_destroy();

header('location:store_login.php');
?>
