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
session_start();
include('header.php');
include('database_inc.php');
include('access_control.php');
?>

<div class="container my-3"> <!-- open container -->
<?php 
    if ($access_control['logged_in'] == "no") {
    header('location:index.php');
?>

</div> <!-- /container -->

</main>


<?php
} else { 
?>
<div class="row my-2">
    <div class="col-12">
        <p>Edit a user<br />
        This page is only visible to logged-in users. We should change this so only a specific admin can see it. </p>
    </div>
</div>
   
<div class="row my-2">
    <div class="col-12">

<form action="user_edit_process.php" method="POST">

    <?php
        $id_to_edit = $_GET['id']; 
        $_SESSION['id_to_edit'] = $id_to_edit;

        $result = mysqli_query($connect,
        "SELECT * FROM users WHERE id = $id_to_edit;");
        while ($row = mysqli_fetch_array($result))
        {             
    ?>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>


<div class="form-group">
    <label for="username">Username</label>
    <input type="username" name="username" class="form-control" id="username1" value="<?php echo $row['username']; ?>">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password1">
</div>

<div class="form-group">
      <label for="role">Role</label>
      <select name="role" id="role" class="form-control">
        <option selected>Member</option>
        <option>Administrator</option>
        <option>Banned</option>
      </select>
    </div>


<button type="submit" class="btn btn-primary">Submit</button>


    <?php 
        }
    ?>
            </tbody>
            </table>
    </div>
</div>



  <hr>

</div> <!-- /container -->


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
