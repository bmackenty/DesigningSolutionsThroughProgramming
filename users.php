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
?>

<div class="container my-3"> <!-- open container -->
<?php 
    $logged_in = $_SESSION['logged_in'];
    $email = $_SESSION['email'];
    if ($logged_in == False) {
    header('location:index.php');
?>

</div> <!-- /container -->

</main>


<?php
} else { 
?>
<div class="row my-2">
    <div class="col-12">
        <p>Manage Users<br />
        This page is only visible to logged-in users. We should change this so only a specific admin can see it. </p>
    </div>
</div>
   
<div class="row my-2">
    <div class="col-12">

    <?php 
        if ($_SESSION['error_delete_yourself']) {
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Problem:</strong> You can't delete yourself. Stop messing around with the URL.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <?php 
        unset($_SESSION['error_delete_yourself']);
        }
    ?>
        <strong>List of Users:</strong>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">user name</th>
                <th scope="col">e-mail</th>
                <th scope="col">role</th>
                <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>

    <?php 
        $result = mysqli_query($connect,
        "SELECT * FROM users;");
        while ($row = mysqli_fetch_array($result))
        { 
            ?>
            <tr>
                <th><?php echo $row['id']; ?> </th>
                <td><?php echo $row['username']; ?> </td>
                <td><?php echo $row['email']; ?> </td>
                <td><?php echo $row['role']; ?> </td>
                <td><?php echo "<a href=\"user_edit.php?id=" . $row['id']. "\">Edit</a>"; ?> 

                <?php 
                // We want the admin to delete users, but we never want the admin to delete their own account.
                // So we use a conditional, like below. $email is the $email of the currently logged in user. 
                
                if ($row['email'] != $email) {

                echo " | <a href=\"user_delete.php?id=" . $row['id']. "\">Delete</a>"; 
                
                }
                
                ?> </td>
            </tr>
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
