<!doctype html>
<html lang="en">
<head>
    <!-- this file is used to test the tinymce editor -->
    <!-- you must have the folder tinymce in the same directory as this file -->
    <!-- the id of the textarea must be mytextarea -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            promotion: false,
            menubar: false,
            plugins: [
                'wordcount', 'table', 'code','codesample', 'insertdatetime', 'emoticons'
            ],
            toolbar: 'code codesample undo redo | styles emoticons | table bold italic | insertdatetime alignleft aligncenter alignright alignjustify | outdent indent'

        });
    </script>


    <title>Rich-text Form example</title>
</head>

<body>
    <?php
    include('store_navbar.php');
    include('database_inc.php');
    ?>
    <div class="container mt-5"> <!-- opening container div -->


        <form action="process_form.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea with no rich text formatting</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Click to submit!</button>
        </form>

        <hr />

        <form action="process_form.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea with rich text formatting</label>
                <textarea class="form-control" id="mytextarea" rows="3"></textarea>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Click to submit!</button>
        </form>





    </div> <!-- closing container div -->
    <?php
    include('store_footer.php');
    ?>
    <!-- please don't touch anything below this line -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
