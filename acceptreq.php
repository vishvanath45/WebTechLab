<?php

$connection = mysqli_connect('localhost','root','toor','password');
if(!$connection){
	die("unable to connect to mysql");
}


$q = "select * from user_data where verified = '0'";

$query = mysqli_query($connection,$q);

// die("success");

if($_SERVER["REQUEST_METHOD"] == "POST")

{
	while($row = mysqli_fetch_assoc($query))
	{


		if(isset($_POST[$row['username']]))
		{
			
			$var = $row['username'];
			
			$pp = "UPDATE user_data SET verified = 1 Where username = '$var'";
			$que = mysqli_query($connection,$pp);


		}
	}
die("Successful");

}
?>
