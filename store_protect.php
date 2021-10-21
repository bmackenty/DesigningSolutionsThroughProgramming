<?php 

// this file should be named store_protect.php
// this file should be used on any page that you want to protect
// from users who are not logged in 

// let's see if there is a session started. 
if(session_status() == 2){
    echo "session started";
} else {
    session_start();
}

// now let's test if someone does NOT have the correct session variables:
// If EITHER logged_in session OR secret_key are wrong, the user cannot login.
if (!$_SESSION['logged_in'] || $_SESSION['secret_key'] != "7277"){
    $_SESSION['error_authentication'] = True;
    header('location:store_login.php');
    die;
    
// it is very important you include a closing } <-- curly brace 
// at the end of your file 

}
?>
