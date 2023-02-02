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
        <!-- this is the search bar, it will send the search term to store_search_results.php -->
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
            <select name="size" class="form-select form-select-lg mb-3" aria-label=".form-select-lg">
                <option value="%" selected>Choose a size...</option>
                <!-- the value is what will be sent to the database, so ensure it matches the data in your database -->
                <option value="XXL">XXL</option>
                <option value="L">Large</option>
                <option value="M">Medium</option>
                <option value="S">Small</option>
            </select>

            <!-- please change the name attribute to match the column name in your database -->
            <select name="price" class="form-select form-select-lg mb-3" aria-label=".form-select-lg">
                <option value="%" selected>Choose a price...</option>
                <!-- the value is what will be sent to the database, so ensure it matches the data in your database -->
                <option value="99">High</option>
                <option value="50">Medium</option>
                <option value="10">Low</option>
            </select>

            <!-- Checkboxes work a little differently. -->
            <!-- The name attribute should be the same for all the checkboxes in the group. -->
            <!-- The value attribute should be different for each checkbox. -->
            <!-- Checkbox data is stored as an array, so you will need to use a loop to access the data. -->
            <!-- You will see this in the store_results.php file. -->

            <fieldset class="border rounded-3 p-3">
                <legend class="float-none w-auto px-3">Choose a category</legend>
                <div class="form-check">
                    <input name="category[]" class="form-check-input" type="checkbox" value="office" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Office
                    </label>
                </div>
                <div class="form-check">
                    <input name="category[]" class="form-check-input" type="checkbox" value="drinking" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Drinking
                    </label>
                </div>
                <div class="form-check">
                    <input name="category[]" class="form-check-input" type="checkbox" value="supplies" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Supplies
                    </label>
                </div>
                <div class="form-check">
                    <input name="category[]" class="form-check-input" type="checkbox" value="fruit" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Fruit
                    </label>
                </div>
                <div class="form-check">
                    <input name="category[]" class="form-check-input" type="checkbox" value="clothing" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Clothing
                    </label>
                </div>
                <div class="form-check">
                    <input name="category[]" class="form-check-input" type="checkbox" value="legal" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Legal
                    </label>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary mt-4">Find the matching items!</button>
        </form>



    </div> <!-- closing container div -->
    <?php
    include('store_footer.php');
    ?>
    <!-- please don't touch anything below this line -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
