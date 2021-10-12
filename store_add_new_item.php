<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Welcome to our store</title>
    </head>
    <body>
        <?php include('store_navbar.php'); ?>
        <div class="container mt-5">
        <form action ="store_add_new_item_process.php" method="POST">
        <div class=" mb-2">
            <label for="description">Description</label>
            <input name="description" type="text" class="form-control" id="description"  placeholder="Enter description">
        </div>
        <div class=" mb-2">
            <label for="price">Price</label>
            <input name="price" type="text" class="form-control" id="price"  placeholder="Enter price">
        </div>
        <div class=" mb-2">
            <label for="quantity">Quantity</label>
            <input name="quantity" type="text" class="form-control" id="quantity"  placeholder="Enter quantity">
        </div>
        <div class=" mb-2">
            <label for="category">Category</label>
            <input name="category" type="text" class="form-control" id="category"  placeholder="Enter category">
        </div>
        <div class=" mb-2">
            <label for="size">Size</label>
            <input name="size" type="text" class="form-control" id="size"  placeholder="Enter size">
        </div>
        <div class=" mb-2">
            <label for="image">Image</label>
            <input name="image" type="text" class="form-control" id="image"  placeholder="Enter image. The image should be a url to an image file, that ends with .png or .jpg">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Add a new item</button>
        </form>
        </div> <!-- closing container div --> 
        <?php 
        include('store_footer.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>
