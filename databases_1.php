
<?php 
// this file should be named databases_1.php
// this file is for students to understand how PHP executes a query

// the line below establishes a connection to our database
include('database_inc.php');

// the lines below execute a QUERY to the database. In this case, 
// we SELECT everything from the table 'users'
$result = mysqli_query($connect,
"SELECT * FROM users;");

// the loop below iterates through the results (if there are any)
// we use the actual colum names from our database in the results. 
// the column names need to match exactly to the column names in your database

while ($row = mysqli_fetch_array($result))
{
    echo $row['id'];
    echo " - ";
    echo $row['email'];
    echo "<br />";
}

?>
