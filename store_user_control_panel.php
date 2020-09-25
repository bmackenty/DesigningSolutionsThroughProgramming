
<!doctype html>
<!-- this file should be saved as store_user_control_panel.php -->
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
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->
    <?php include('store_navbar.php'); ?>

<div class="container mt-5">

<table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User email</th>
      <th scope="col">Encypted Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<tbody>
  
  
  <?php

include('database_inc.php');

$result = mysqli_query($connect,
"SELECT * FROM users;");

while ($row = mysqli_fetch_array($result))
{
?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td>
      <a href="store_user_edit.php?id=<?php echo $row['id']; ?>">Edit this user</a>
      |
      <a href="store_user_delete_process.php?id=<?php echo $row['id']; ?>">Delete this user</a>

      
      </td>
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
</div> <!-- closes container div -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
