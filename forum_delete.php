<!doctype html>
<!-- this file should be named forum_delete.php -->
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
include('store_navbar.php'); 
include('database_inc.php');
?>
<div class="container mt-3">

<div class="alert alert-light" role="alert">
  
  <p>
     This page will allow you to delete a forum
  </p>
  <p>
   This page will delete the forum AND ALL THE THREADS.
  </p>
<p> 
  YOUR DATA WILL BE GONE FOREVER!!!
 </p>
   
</div>


<?php 
$query_get_all_forums = mysqli_query($connect, "SELECT * FROM forum;");
// we don't want to show the user a table of forums if there are no forums, so we include this check here:
if (mysqli_num_rows($query_get_all_forums) != 0){
  ?>
<div class="alert alert-primary mt-4" role="alert">
  The table below is a list of existing forums in your database. If you want to view
  a forum just click the name of the forum. 
</div>


    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Forum Name</th>
          <th scope="col">Action</th>
          <th scope="col">Forum Description</th>
        </tr>
      </thead>
      <tbody>
<?php 
    while($row_get_all_forums = mysqli_fetch_array($query_get_all_forums)){
  ?>
  <tr>
  <td><a target="_blank" href="forum_view.php?forum_id=<?php echo $row_get_all_forums['id']; ?>"><?php echo $row_get_all_forums['forum_name']; ?>   </td>
  <td><a target="_blank" href="forum_delete_process.php?forum_id=<?php echo $row_get_all_forums['id']; ?>">Delete</a>   </td>
  <td><?php echo $row_get_all_forums['forum_description']; ?></td>
</tr>
  <?php
    }
?>
    
  </tbody>
</table>


<?php 
} else {
    ?>
<div class="alert alert-warning" role="alert">
  <p>It doesn't seem like there are any forums created for you to post in. Sorry about that! <br />
  <small>If you an administrator, please create a forum first so your users can post in a forum!</small> </p>
</div>



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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <?php
    // This code displays every defined variable and error message.
    // It's quite helpful when you are debugging. 

      // echo "<pre>";
      // print_r(get_defined_vars());
      // echo "</pre>";
    ?>
  
  </body>
</html>
