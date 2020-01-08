<!doctype html>
<!-- This file should be named store_order_item.php -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->
<?php
session_start();

// the line below includes a file which displays our navbar.
include('store_navbar.php'); 

// the line below includes a file which opens a database connection
include('database_inc.php');

// we need to capture the item the user wants added to their shopping cart
$item_to_be_added_to_cart = $_GET['id'];

?>

<div class="container mt-5">


<?php 

// we won't let a user who isn't logged in add something to their cart.
if(!$_SESSION['logged_in']){
    
    // the block of code between the two curly brackets will only be displayed if $_SESSION['logged_in'] is NOT TRUE.

?>

    <br />
    <br />
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Warning</strong> You must be logged-in to see this page.
      <a href="store_inventory.php" class="alert-link">Click here to return to home page.</a>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>

<?php
} else {

    // the block of code between the two curly brackets will only be displayed if 
    // $_SESSION['logged_in'] is TRUE (we have a logged-in user).

echo "We will put the code to add this item to our shopping cart.";
?>
<a href="store_inventory.php">Click here to return to the store inventory</a>
<?php


}
?>

    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING BELOW THIS LINE -->
    <!-- =========================================== -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
