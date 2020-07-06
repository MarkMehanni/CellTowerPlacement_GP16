
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once 'index.php';

$link = mysqli_connect("localhost","root","") or die("failed to connect to server !!");
mysqli_select_db($link,"demo");

if(isset($_POST['submit']))
{
  $errorMessage = "";
  $password=  $_POST['password'];
  $username = $_POST['username'];
  $lastname = $_POST['lastname'];
  $phoneNumber =  $_POST['phone'];
  $email =  $_POST['email'];
  $db =  $_POST['dateofbirth'];
  $gender =  $_POST['gender'];


if ($errorMessage != "" ) 
{
	echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else
{
  $sql = "INSERT INTO `users`( `password`, `username`, `lastname`,`phone`, `email`,`dateofbirth`,`gender`,`usertype`) 
  VALUES ('$password','$username','$lastname','$phoneNumber','$email','$db','$gender','engineer')";

	mysqli_query($link,$sql) or die(mysqli_error($link));
}
}
?>
   <div class="container">
  
  <div class="alert alert-success">
    <strong>Item added successfully!</strong>
  </div>
  
</body>
</html>