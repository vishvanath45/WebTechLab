<?php
$connection = mysqli_connect('localhost','root','toor','password');
if(!$connection){
	die("unable to connect to mysql");
}


$username = mysqli_escape_string($connection, $_POST['username_admin']);

$password = mysqli_escape_string($connection, $_POST['password_admin']);

$q = "SELECT * FROM credentials WHERE username = '$username' and password = '$password' and admin = 'y'";

$query = mysqli_query($connection,$q);

$num_rows = mysqli_num_rows($query);

// echo "$num_rows Rows \n";

if($num_rows == 1)
{
	die("login successful");
}
else
{
	die("Login failed");
}

?>