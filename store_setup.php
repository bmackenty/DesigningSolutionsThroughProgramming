<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>store setup</title>
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
$query_test_cart_table = mysqli_query($connect, "select 1 FROM cart LIMIT 1;");
if($query_test_cart_table !== FALSE)
{ ?>
    <div class="alert alert-success" role="alert">
    You have a <strong>'cart'</strong> table in your database. That's good. 
    </div>
<?php }
else
{
    $sql_create_cart = "CREATE TABLE cart (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        item_id TEXT NULL,
        user_id TEXT NULL
        )";
    mysqli_query($connect, $sql_create_cart); ?>
        <div class="alert alert-success" role="alert">
    You didn't have a <strong>'cart'</strong> table in your database, but I've created one for you.  
    </div>
    <?php
}
?>






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
        role TEXT NULL,
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
$filename = 'store_edit_item.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_edit_item.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_edit_item.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_edit_item.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'store_edit_item_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_edit_item_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_edit_item_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_edit_item_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'store_update_edited_item.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_update_edited_item.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_update_edited_item.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_update_edited_item.php">from here</a>
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
$filename = 'store_login.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_login.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_login.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_login.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>

<?php 
$filename = 'store_login_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_login_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_login_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_login_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>




<?php 
$filename = 'store_register_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_register_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_register_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_register_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>



<?php 
$filename = 'store_register.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_register.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_register.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_register.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>




<?php 
$filename = 'store_login_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_login_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_login_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_login_process.php">from here</a>
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

<?php 
$filename = 'store_delete_item_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_delete_item_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_delete_item_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_delete_item_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'store_user_control_panel.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_user_control_panel.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_user_control_panel.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_user_control_panel.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'store_user_delete_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_user_delete_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_user_delete_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_user_delete_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'store_user_edit.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_user_edit.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_user_edit.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_user_edit.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'store_user_edit.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>store_user_edit_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>store_user_edit_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/store_user_edit_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>

<?php 
$filename = 'forum_create.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>forum_create.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>forum_create.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/forum_create.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'forum_create_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>forum_create_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>forum_create_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/forum_create_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'forum_delete.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>forum_delete.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>forum_delete.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/forum_delete.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>

<?php 
$filename = 'forum_index.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>forum_index.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>forum_index.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/forum_index.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>


<?php 
$filename = 'forum_delete_process.php';
if (file_exists($filename)) { ?>
    <div class="alert alert-success" role="alert">
    You have the file <strong>forum_delete_process.php</strong>
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE the file <strong>forum_delete_process.php</strong>
    </div>
    <ul>
        <li>get the file <a target="_new" href="https://github.com/bmackenty/DesigningSolutionsThroughProgramming/blob/master/forum_delete_process.php">from here</a>
        <li>upload the file to our remote host in Germany</li>
        <li>reload this file</li>
    </ul>
<?php  
die;
}
?>







<?php 
$count_query = mysqli_query($connect, "SELECT COUNT(id) AS total FROM items;");
while ($row = mysqli_fetch_assoc($count_query)){
    $total_items =  $row['total'];
}
if ($total_items > 5) { ?>
    <div class="alert alert-success" role="alert">
    You have at least 6 items in your items table, which is a good thing. 
    </div>
<?php
} else { ?>
    <div class="alert alert-danger" role="alert">
    Error: You do NOT HAVE at least 6 items in your items table. Please <a href="store_add_new_item.php" target="_blank">add more items to your store!</a>
    </div>
<?php  
die;
}
?>

</div> <!-- closing container div --> 
<?php 
    include('store_footer.php');
?>
<!-- please don't touch anything below this line --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
