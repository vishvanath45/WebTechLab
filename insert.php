<?php

$link = mysqli_connect("localhost", "root", "demo");

if($link == false){
	die("Error, could not connect. " .mysql_connect_error())
}


// section on Personal infromation data entry

$firstname = mysql_real_escape_string($link,
	$_REQUEST['firstname']);

$lastname = mysql_real_escape_string($link,
	$_REQUEST['lastname']);

$guardian = mysql_real_escape_string($link,
	$_REQUEST['guardian']);

$dob = mysql_real_escape_string($link,
	$_REQUEST['dob']);

$phone = mysql_real_escape_string($link,
	$_REQUEST['phone']);

$address = mysql_real_escape_string($link,
	$_REQUEST['address']);

$pincode = mysql_real_escape_string($link,
	$_REQUEST['pincode']);


$sql = "INSERT into persons (firstname, lastname, guardian, dob ) VALUES ('$firstname', '$lastname', '$guardian', '$dob')";

$sql = "INSERT into persons (phone, address, pincode) VALUES ('$phone', '$lastname', '$pincode')";


// This was section on Personal infromation data entered 

// Now college section information code starts
// TODO - 
// Get data and store into SQL

$Programme = mysql_real_escape_string($link,
	$_REQUEST['Programme']);

$Course = mysql_real_escape_string($link,
	$_REQUEST['Course']);

$Regno = mysql_real_escape_string($link,
	$_REQUEST['Regno']);

$Rollno = mysql_real_escape_string($link,
	$_REQUEST['Rollno']);

$year = mysql_real_escape_string($link,
	$_REQUEST['year']);

$sql = "INSERT into persons (Programme, Course, Regno, Rollno, year ) VALUES ('$Programme', '$Course', '$Regno', '$Rollno', '$year')";

// Other Information section starts

$school12 = mysql_real_escape_string($link,
	$_REQUEST['school12']);

$affiliated12 = mysql_real_escape_string($link,
	$_REQUEST['affiliation12']);

$marks12 = mysql_real_escape_string($link,
	$_REQUEST['marks12']);

$yearofpassing12 = mysql_real_escape_string($link,
	$_REQUEST['pass12']);

$school10 = mysql_real_escape_string($link,
	$_REQUEST['school10']);

$affiliated10 = mysql_real_escape_string($link,
	$_REQUEST['affiliation10']);

$marks10 = mysql_real_escape_string($link,
	$_REQUEST['marks10']);

$yearofpassing10 = mysql_real_escape_string($link,
	$_REQUEST['pass10']);



$sql = "INSERT into persons (school12, affiliated12, marks12, yearofpassing12, school10, affiliation10, marks10, yearofpassing10 ) VALUES ('$school12', '$affiliated12', '$marks12', '$yearofpassing12', '$school10', '$affiliation10', '$marks10', '$yearofpassing10')";

if(mysqli_query($link, $sql)){
	echo "Records entered successfully ";
} else{
	echo "Error could not able to execute $sql. " .
	mysqli_error($link);
}

mysqli_close($link);
?>