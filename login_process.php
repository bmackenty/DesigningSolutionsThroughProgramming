<?php
// below we start a session and include our database connection
session_start(); 
include('database_inc.php');

// the 2 lines below capture the data sent from a form.
$email = $_POST['email'];
$password = $_POST['password'];


// the lines below execute a QUERY to the database. In this case, 
// we SELECT everything from the table 'users'
// we store the query into a variable named "$result"

$result = mysqli_query($connect,
"SELECT * FROM users WHERE email LIKE '$email';");

// the line below tests if our database query founf any results. 

if (mysqli_num_rows($result) == 0) {
  $no_email = True;
  $_SESSION['error_no_email'] = True;
  header('location:login.php');

} else {

// the loop below iterates through the results (if there are any)
// we use the actual colum names from our database in the results. 
// the column names need to match exactly to the column names in your database

while ($row = mysqli_fetch_array($result))
{
  $password_in_databases = $row['password'];
  if ($password == $password_in_databases) {
    $logged_in = True;
    $_SESSION['logged_in'] = True;
    $_SESSION['email'] = $email;
    header('location:login.php');
  } else {
    $wrong_password = True;
    $_SESSION['wrong_password'] = True;
    header('location:login.php');

  }

}

} // this closes the condition that checks if there were any results. 
?>
