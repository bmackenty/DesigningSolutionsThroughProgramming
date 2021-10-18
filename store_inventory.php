<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Please login</title>
    </head>
    <body>
        
    <?php include('store_navbar.php'); ?>
      <div class="container mt-5">
      <table class="table table-hover table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col">Size</th>
            <th scope="col">Cost</th>
            <th scope="col">image</th>
          </tr>
        </thead>
      <tbody>  
        <?php

      include('database_inc.php');
      $result = mysqli_query($connect,
      "SELECT * FROM items;");

      while ($row = mysqli_fetch_array($result))
      {
      ?>
          <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['size']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['image']; ?></td>
          </tr>
        <?php
      }
      ?>
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
