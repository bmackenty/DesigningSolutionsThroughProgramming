<!doctype html>
<html lang="en">
  <!-- This file should be named forum_create.php -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Welcome to our store! </title>
    </head>
    <body>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING ABOVE THIS LINE -->
    <!-- =========================================== -->
<?php 
include('store_navbar.php'); 
include('database_inc.php');
?>
<div class="container mt-3">

<div class="alert alert-light" role="alert">
  
  <p>This page allows you to <strong>create</strong> a new forum.
   You might want to allow users to create new forums or you might 
   want to restrict users from creating new forums. It's up to you.</p>
   
   <p>The bottom of this page has a list of forums which have been created. </p>
   
</div>


    <form action="forum_create_process.php" method="POST">
    <div class="form-group">
        <label for="forum_name">Forum name</label>
        <input type="text" name="forum_name" class="form-control" id="forum_name" placeholder="Please type new forum name here">
    </div>
    <div class="form-group">
        <label for="forum_desc">Forum Description</label>
        <textarea name="forum_description" class="form-control" id="forum_desc" rows="5" placeholder="Please type a description for your new forum here"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create new forum</button>
    </form>

<?php 
$query_get_all_forums = mysqli_query($connect, "SELECT * FROM forum;");
// we don't want to show the user a table of forums if there are no forums, so we include this check here:
if (mysqli_num_rows($query_get_all_forums) != 0){
  ?>
<div class="alert alert-primary mt-4" role="alert">
  The table below is a list of existing forums in your database.
</div>


    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Forum ID #</th>
          <th scope="col">Forum Name</th>
          <th scope="col">Forum Description</th>
        </tr>
      </thead>
      <tbody>
<?php 
    while($row_get_all_forums = mysqli_fetch_array($query_get_all_forums)){
  ?>
  <tr>
  <td><?php echo $row_get_all_forums['id']; ?></td>
  <td><?php echo $row_get_all_forums['forum_name']; ?></td>
  <td><?php echo $row_get_all_forums['forum_description']; ?></td>
</tr>
  <?php
    }
  ?>
  </tbody>
</table>
<?php 
}
?>
</div> <!-- close the container -->
    <footer class="footer mt-4 py-3 bg-secondary text-white text-center">
      <div class="container">
        <span >Thank you for visiting our site. :-) </span>
      </div>
    </footer>
    <!-- =========================================== -->
    <!-- PLEASE DO NOT EDIT ANYTHING BELOW THIS LINE -->
    <!-- =========================================== -->
<!-- please don't touch anything below this line --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <?php
    // This code displays every defined variable and error message.
    // It's quite helpful when you are debugging. 

      // echo "<pre>";
      // print_r(get_defined_vars());
      // echo "</pre>";
    ?>
  
  </body>
</html>
