<!doctype html>
<!-- This file should be named: store_add_to_cart.php -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Add to Cart</title>
    </head>
    <body>
<?php 
session_start();
include('store_navbar.php'); 
include('database_inc.php');
$id = $_GET['id'];
?>
<div class="container mt-5">
  
<?php 
// check if user is logged in
if(isset($_SESSION['user_id'])){
    $logged_in_id = $_SESSION['logged_in_id'];

$query_add_to_cart = mysqli_query($connect, "UPDATE cart SET item_id = '$id', user_id = '$logged_in_id';");

header('location:store_index.php');

} else {
    ?>

<div class="alert alert-warning" role="alert">
  You must be logged in to add items to your cart! Please <a href="store_login.php" class="alert-link">log in</a> or <a href="store_register.php" class="alert-link">register</a> to continue.
</div>




    <?php
}
?>
<?php 

$query_get_item = mysqli_query($connect, "SELECT * FROM items WHERE id = '$id';");
while($result_get_item = mysqli_fetch_array($query_get_item)){
    ?>

<p>Item name: <?php echo $result_get_item['description']; ?></p>

<p>Price: <?php echo $result_get_item['price']; ?></p>

    <?php
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
