<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title> - Control Panel - </title>
    </head>
    <body>
    <?php 
    session_start();
    include('store_navbar.php'); 
    ?>
    <div class="container mt-5">


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
      <td><a href="store_inventory.php">See Inventory</a></td>
      <td>See store inventory</td>
    </tr>
    <tr>
      <td><a href="store_user_control_panel.php">Control users</a></td>
      <td>See, edit, or delete users</td>
    </tr>
    <tr>
      <td><a href="store_all_open_orders.php">Orders</a></td>
      <td>See all open orders</td>
    </tr>
  </tbody>
</table>


</div> <!-- closing container div --> 
<?php 
    include('store_footer.php');
?>
<!-- please don't touch anything below this line --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
