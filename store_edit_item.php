<!doctype html>
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
    <?php include('store_navbar.php'); ?>
<div class="container mt-5">

<table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Description</th>
      <th scope="col">Size</th>
      <th scope="col">Cost</th>
      <th scope="col">Action</th>
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
      <td><a href="store_edit_item_process.php?id=<?php echo $row['id']; ?>">Edit this item</a></td>
    </tr>
  <?php
}
?>
  </tbody>
</table>
</div> <!-- close the container -->
    
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
