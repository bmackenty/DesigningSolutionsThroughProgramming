<!doctype html>
<html lang="en">

<head>
    <!-- this file should named store_quiz.php -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Welcome to our store! </title>
</head>

<body>
    <?php
    include('store_navbar.php');
    include('database_inc.php');
    $row_counter = 0;
    ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-12 text-center">
                <h2>Welcome to our Quiz to find your perfect PUT THING HERE.</h2>
            </div>
        </div>

        <!-- begin search bar-->
        <div class="row mb-4">
            <div class="col-12">
                <form action="store_search_results.php" method="POST" class="form-inline">
                    <div class="input-group" style="width:100%;">
                        <input type="search" name="search" class="form-control" placeholder="Enter your search term">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end search bar -->

        <form action="store_results.php" method="POST">
            <!-- please change the name attribute to match the column name in your database -->
            <select name="breed" class="form-select form-select-lg mb-3" aria-label=".form-select-lg">
                <option value="%" selected>Choose a breed...</option>
                <!-- the value is what will be sent to the database, so ensure it matches the data in your database -->
                <option value="Labrador">Labrador</option>
                <option value="German Shepard">German Shepard</option>
                <option value="Poodle">Poodle</option>
            </select>

            <!-- please change the name attribute to match the column name in your database -->
            <select name="exercise" class="form-select form-select-lg mb-3" aria-label=".form-select-lg">
                <option value="%" selected>Choose an exercise...</option>
                <!-- the value is what will be sent to the database, so ensure it matches the data in your database -->
                <option value="lots">Lots of exercise</option>
                <option value="medium">Medium amount of exercise</option>
                <option value="little">Little exercise</option>
            </select>

            <button type="submit" class="btn btn-primary">Find the matching items!</button>
        </form>



    </div> <!-- closing container div -->
    <?php
    include('store_footer.php');
    ?>
    <!-- please don't touch anything below this line -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
