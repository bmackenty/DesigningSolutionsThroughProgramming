<?php 

// this file should be named databases_1.php
// this file is for students to understand how PHP executes a query

include('database_inc.php');

$result = mysqli_query($connect,
"SELECT * FROM users;");
while ($row = mysqli_fetch_array($result))
{
    echo $row['id'];
    echo " - ";
    echo $row['email'];
    echo "<br />";
}
?>
