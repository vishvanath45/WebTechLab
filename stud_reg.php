<?php
$connection = mysqli_connect('localhost','root','toor','password');
if(!$connection){
	die("unable to connect to mysql");
}


$username = mysqli_escape_string($connection, $_POST['username']);

$password = mysqli_escape_string($connection, $_POST['password']);

$uname = mysqli_escape_string($connection, $_POST['uname']);

$father = mysqli_escape_string($connection, $_POST['father']);

$mother = mysqli_escape_string($connection, $_POST['mother']);

$dob = mysqli_escape_string($connection, $_POST['dob']);

$gender = mysqli_escape_string($connection, $_POST['gender']);

$email = mysqli_escape_string($connection, $_POST['email']);

$contact = mysqli_escape_string($connection, $_POST['contact']);

$address = mysqli_escape_string($connection, $_POST['address']);

$city = mysqli_escape_string($connection, $_POST['city']);

$state = mysqli_escape_string($connection, $_POST['state']);

$pin = mysqli_escape_string($connection, $_POST['pin']);

$nation = mysqli_escape_string($connection, $_POST['nation']);

$country = mysqli_escape_string($connection, $_POST['country']);

$registration = mysqli_escape_string($connection, $_POST['registration']);

$dept = mysqli_escape_string($connection, $_POST['dept']);

$roll = mysqli_escape_string($connection, $_POST['roll']);

$session = mysqli_escape_string($connection, $_POST['session']);
//Semester skip
// $country = mysqli_escape_string($connection, $_POST['country']);

$school12 = mysqli_escape_string($connection, $_POST['school12']);

$affiliated12 = mysqli_escape_string($connection, $_POST['affiliated12']);

$percent12 = mysqli_escape_string($connection, $_POST['percent12']);

$pass12 = mysqli_escape_string($connection, $_POST['pass12']);


// echo "un: $username  p: $password n: $uname cn: $contact\n";

$q = "insert into user_data values('$username', '$password', '$uname', '$father', '$mother',
 '$gender', '$email', '$contact', '$address', '$city', '$state', '$pin', '$country')";

$query = mysqli_query($connection, $q);

if($query){
	die("Succesfully inserted into table");
}
else
{
	echo "$query";
	die("UNSuccesfull in inserting into table");
}


?>