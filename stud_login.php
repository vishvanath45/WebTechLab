<?php

	session_start();
	$connection = mysqli_connect('localhost','root','toor','password');
	if(!$connection){
		die("unable to connect to mysql");
	}


	$username = mysqli_escape_string($connection, $_POST['username']);

	$password = mysqli_escape_string($connection, $_POST['password']);

	// $q = "SELECT * FROM credentials WHERE username = '$username' and password = '$password' ";

	$q = "select * from user_data, credentials where ( credentials.username = '$username' and credentials.password = '$password') or ( user_data.username = '$username' and user_data.password = '$password')";

	$query = mysqli_query($connection,$q);

	$num_rows = mysqli_num_rows($query);


	// echo " $query .. $num_rows Rows \n";

	if($num_rows > 1)
	{
		die("login successful");
	}
	else
	{
		die("Login failed");
	}

?>