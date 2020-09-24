
<!doctype html>
<!-- this file should be saved as store_user_edit.php -->
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
    <?php 

        // the line below gets the id from the url. There are all sorts of security issues here
        // can you think of some security problems? 

        $user_to_edit = $_GET['id'];

        // the line below includes a file that allows connection to our database.

        include('database_inc.php');

    ?>
<?php include('store_navbar.php'); ?>
<div class="container mt-5">

<?php 

$result = mysqli_query($connect, "SELECT * from users WHERE id = '$user_to_edit';");


while ($row = mysqli_fetch_array($result))
{
    ?>
<form action = "store_user_edit_process.php" method="POST">

  <div class="form-group">
    <label for="description">Email</label>
    <input 
    name="email" 
    type="text" 
    class="form-control" 
    id="email"  
    placeholder="Enter email"
    value = "<?php echo $row['email']; ?>"
    >
  </div>



<input type="hidden" name="user_to_edit" value="<?php echo $user_to_edit; ?>">

  <button type="submit" class="btn btn-primary">Edit this user</button>
</form>

<?php
}
?>

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

