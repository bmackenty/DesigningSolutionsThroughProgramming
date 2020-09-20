<!doctype html>
<!-- This file should be named store_control_panel.php -->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->

    <?php 
    session_start();
    include('store_navbar.php'); 
    ?>
    <div class="container mt-5">
    <?php
    
    if(!$_SESSION['logged_in']){
    // we don't want a user who isn't logged in to see this page.
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
    ?>

<table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Action</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="store_add_new_item.php">New item</a></td>
      <td>Add a new inventory item to our school store.</td>
    </tr>
    <tr>
      <td><a href="store_edit_item.php">Edit item</a></td>
      <td>Edit an inventory item in our school store.</td>
    </tr>
    <tr>
      <td><a href="store_delete_item.php">Delete item</a></td>
      <td>Delete an inventory item from our school store.</td>
    </tr>
    <tr>
      <td><a href="inventory.php">See Inventory</a></td>
      <td>See store inventory</td>
    </tr>
    <tr>
      <td><a href="store_user_control_panel.php">Control users</a></td>
      <td>See, edit, or delete users</td>
    </tr>
  </tbody>
</table>


<?php
    } // this closes the conditional for a logged-in or logged out user
  ?>

</div> <!-- close the container -->
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING BELOW THIS LINE -->
    <!-- =========================================== -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
