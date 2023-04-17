<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Welcome to our Forums</title>
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
  This page is the front page for your forums. You might have only one forum 
  or you might have many. However, we need a user to <strong>choose</strong>
  which forum they want to interact with (view the forum, post to the forum, etc..)
  If you only have one forum, you probably don't need this page, and just use forum_view.php
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
          <th scope="col">Forum Description</th>
        </tr>
      </thead>
      <tbody>
<?php 
    while($row_get_all_forums = mysqli_fetch_array($query_get_all_forums)){
  ?>
  <tr>
  <td><a target="_blank" href="forum_view.php?forum_id=<?php echo $row_get_all_forums['id']; ?>"><?php echo $row_get_all_forums['forum_name']; ?>   </td>
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
