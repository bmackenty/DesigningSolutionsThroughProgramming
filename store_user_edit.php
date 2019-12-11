<!doctype html>
<!-- this file should be named store_user_edit_process.php -->
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
<form action = "store_user_process_a_user.php" method="POST">

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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

