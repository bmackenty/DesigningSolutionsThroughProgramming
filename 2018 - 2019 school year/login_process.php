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

// the line below tests if our database query found any results. 

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
  if (password_verify($password,$password_in_databases)) {
    $unique_id_of_logged_in_user = $row['unique_id'];

    // when a login is successful, we update the last logged in time and set logged in to 1.
    // MySQL expects the date to be in a specific format
    // https://stackoverflow.com/questions/2215354/php-date-format-when-inserting-into-datetime-in-mysql

    $time_date_now = date("Y-m-d H:i:s");
    
    $result2 = mysqli_query($connect,"UPDATE users SET 
    last_logged_in = '$time_date_now', 
    logged_in_now = 1,
    session_id = '$session_id'
     WHERE unique_id = '$unique_id_of_logged_in_user';");
    $_SESSION['unique_id_of_logged_in_user'] = $unique_id_of_logged_in_user;

    header('location:index.php');
  } else {
    $_SESSION['wrong_password'] = True;
    header('location:login.php');
  }
}

} // this closes the condition that checks if there were any results. 
?>
