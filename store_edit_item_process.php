<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Welcome to our store</title>
    </head>
    <body>
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

  <div class="form-group mb-2">
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

  <div class="form-group mb-2">
    <label for="price">Price</label>
    <input 
    name="price" 
    type="text" 
    class="form-control" 
    id="price"  
    placeholder="Enter price"
    value = "<?php echo $row['price']; ?>">
  </div>

  <div class="form-group mb-2">
    <label for="quantity">Quantity</label>
    <input 
    name="quantity" 
    type="text" 
    class="form-control" 
    id="quantity"  
    placeholder="Enter quantity"
    value = "<?php echo $row['quantity']; ?>">    
  
  </div>

  <div class="form-group mb-2">
    <label for="category">Category</label>
    <input 
    name="category" 
    type="text" 
    class="form-control" 
    id="category"  
    placeholder="Enter category"
    value = "<?php echo $row['category']; ?>">
  </div>

  <div class="form-group mb-2">
    <label for="size">Size</label>
    <input 
    name="size" 
    type="text" 
    class="form-control" 
    id="size"  
    placeholder="Enter size"
    value = "<?php echo $row['size']; ?>">

  </div>

  <div class="form-group mb-2">
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

  <button type="submit" class="btn btn-primary mt-4">Edit this item</button>
</form>

<?php
}
?>

</div> <!-- closing container div --> 
        <?php 
        include('store_footer.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>
