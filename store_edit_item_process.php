
<!doctype html>
<!-- this file should be named store_edit_item_process.php -->
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

        // the line below gets the id from the url. There are all sorts of security issues here
        // can you think of some security problems? 

        $item_to_edit = $_GET['id'];

        // the line below includes a file that allows connection to our database.

        include('database_inc.php');

    ?>
<?php include('store_navbar.php'); ?>
<div class="container mt-5">

<?php 

$result = mysqli_query($connect, "SELECT * from items WHERE id = '$item_to_edit';");


while ($row = mysqli_fetch_array($result))
{
    ?>
<form action = "store_update_edited_item.php" method="POST">

  <div class="form-group">
    <label for="description">Description</label>
    <input 
    name="description" 
    type="text" 
    class="form-control" 
    id="description"  
    placeholder="Enter description"
    value = "<?php echo $row['description']; ?>"
    >
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input 
    name="price" 
    type="text" 
    class="form-control" 
    id="price"  
    placeholder="Enter price"
    value = "<?php echo $row['price']; ?>">
  </div>

  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input 
    name="quantity" 
    type="text" 
    class="form-control" 
    id="quantity"  
    placeholder="Enter quantity"
    value = "<?php echo $row['quantity']; ?>">    
  
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <input 
    name="category" 
    type="text" 
    class="form-control" 
    id="category"  
    placeholder="Enter category"
    value = "<?php echo $row['category']; ?>">
  </div>

  <div class="form-group">
    <label for="size">Size</label>
    <input 
    name="size" 
    type="text" 
    class="form-control" 
    id="size"  
    placeholder="Enter size"
    value = "<?php echo $row['size']; ?>">

  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input 
    name="image" 
    type="text" 
    class="form-control" 
    id="image"  
    placeholder="Enter image"
    value = "<?php echo $row['image']; ?>">

  </div>
<input type="hidden" name="item_to_edit" value="<?php echo $item_to_edit; ?>">

  <button type="submit" class="btn btn-primary">Edit this item</button>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
