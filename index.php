<!doctype html>
<html lang="en">
    <!-- Documentation: http://getbootstrap.com/docs/4.1/getting-started/introduction/ -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <!-- keep your content within body opening and closing tags -->
  <body>
      
<?php 
include('header.php');
?>

<div class="container m-3"> <!-- open container -->

<?php 
session_start();

$logged_in = $_SESSION['logged_in'];
if ($logged_in == False) {
?>

<p>You are not logged in. To login, <a href="login.php">please click here</a></p>

<?php
} else { 
  $email = $_SESSION['email'];
  echo "You are already logged in as $email! ";
  ?>
  <a href="logout.php">Click here to logout</a>
  <?php
}
?>

</div>  <!-- close container -->

    <!-- Please don't touch anything below this line -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

<?php
include('footer.php');
?>

</html>
