<!doctype html>
<!-- this file should be named store_search_results.php -->
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
?>
<div class="container mt-5">

<?php
include('database_inc.php');

$search_term = $_POST['search'];

// because we never trust user input we santize it. 
// http://php.net/manual/en/mysqli.real-escape-string.php
// this replaces SQL characters with safe characters.
// it's not perfect, but it's better than nothing!!

$search_term = mysqli_real_escape_string($connect,$search_term);

# below we query the items table. The % sign is a wildcard character, which matches any character
$search_query = mysqli_query($connect, "SELECT * FROM items WHERE description LIKE '%$search_term%';");

if (mysqli_num_rows ($search_query) == 0) {
    ?>

<div class="alert alert-info mt-5 mb-5" role="alert">
  We are sorry! We can't find any items with that search term. Please 
  <a href="index.php" class="alert-link">click here</a>. to return to our home page. 
</div>

<?php

} else {
    $number_of_results = mysqli_num_rows($search_query);
?>
<table class="table table-hover">
<caption>We found <?php echo $number_of_results; ?> results from your search.</caption>
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Buy now!</th>
    </tr>
  </thead>
  <tbody>
<?php

while ($row = mysqli_fetch_array($search_query)) {
    ?>
    <tr>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><img height="50" width="50" src="<?php echo $row['image']; ?>"></td>
      <td><a href="store_add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mt-2">Add to cart</a></td>

    </tr>
    <?php
    }
}
?>
</table>



</div> <!-- close the container -->
    <footer class="footer mt-auto mt-4 py-3 bg-secondary text-white text-center">
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
  </body>
</html>
