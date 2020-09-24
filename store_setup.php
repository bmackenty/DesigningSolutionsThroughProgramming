<!doctype html>
<!-- this file should be saved as store_setup.php -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School Store Setup</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
<body>
<div class="container mt-5">

    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->


<h3>Welcome to the ASW school store setup wizard</h3>
<p>This file will setup your school store so you can start editing and making your own store</p>
<p>Please carefully read any error messages and follow the suggested steps to fix them</p>


    <!-- =========================================== -->
    <!-- start database_inc.php check                -->
    <!-- =========================================== -->
<?php 
$filename = 'database_inc.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>database_inc.php</strong>
    </div>
<?php
include('database_inc.php');
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>database_inc.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/database_inc.php">from here</a>
        <li>edit the file as directed</li>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>
    <!-- =========================================== -->
    <!-- end database_inc.php check                 -->
    <!-- =========================================== -->


    <!-- =========================================== -->
    <!-- start database connectivity check           -->
    <!-- =========================================== -->

<?php 
if (!$connect) { ?>
    <div class="alert alert-danger" role="alert">
    Error: <strong>database_inc.php</strong> is not correctly setup. 
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/database_inc.php">from here</a>
        <li>edit the file EXACTLY AS directed</li>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php } else { ?>
    <div class="alert alert-success" role="alert">
    <strong>database_inc.php</strong> is setup successfully.
    </div>
<?php } 
?>
    <!-- =========================================== -->
    <!-- end database connectivity check           -->
    <!-- =========================================== -->

    <!-- =========================================== -->
    <!-- start MySQL tables check / creation         -->
    <!-- =========================================== -->


<?php 
$query_test_user_table = mysqli_query($connect, "select 1 FROM users LIMIT 1;");
if($query_test_user_table !== FALSE)
{ ?>
    <div class="alert alert-success" role="alert">
    You have a <strong>'users'</strong> table in your database. That's good. 
    </div>
<?php }
else
{
    $sql_create_users = "CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email TEXT NULL,
        password TEXT NULL
        )";
    mysqli_query($connect, $sql_create_users); ?>
        <div class="alert alert-success" role="alert">
    You didn't have a <strong>'users'</strong> table in your database, but I've created one for you.  
    </div>
    <?php
}
?>

<?php 
$query_test_items_table = mysqli_query($connect, "select 1 FROM items LIMIT 1;");
if($query_test_items_table !== FALSE)
{ ?>
    <div class="alert alert-success" role="alert">
    You have a <strong>'items'</strong> table in your database. That's good. 
    </div>
<?php }
else
{
    $sql_create_items = "CREATE TABLE items (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        category TEXT NULL,
        price TEXT NULL,
        size TEXT NULL,
        description TEXT NULL,
        image TEXT NULL,
        quantity TEXT NULL
        )";
    mysqli_query($connect, $sql_create_items); ?>
        <div class="alert alert-success" role="alert">
    You didn't have a <strong>'items'</strong> table in your database, but I've created one for you.  
    </div>
    <?php
}
?>

<?php 
$filename = 'store_add_new_item.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_add_new_item.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_add_new_item.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_add_new_item.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>

<?php 
$filename = 'store_add_new_item_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_add_new_item_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_add_new_item_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_add_new_item_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'store_control_panel.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_control_panel.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_control_panel.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_control_panel.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>

<?php 
$filename = 'store_logout.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_logout.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_logout.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_logout.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'store_delete_item.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_delete_item.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_delete_item.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_delete_item.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>





    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING BELOW THIS LINE -->
    <!-- =========================================== -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</div> <!-- closes container div -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
