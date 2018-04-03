<?php
session_start();

$connection = mysqli_connect('localhost','root','toor','password');
if(!$connection){
	die("unable to connect to mysql");
}


$var = $_SESSION['login_user'];

$q = "select * from user_data where username = '$var'";

$query = mysqli_query($connection,$q);


if($query->num_rows > 0)
{
	while($row = $query->fetch_assoc())
	{	
		$username = $row['username'];
		$name = $row['name'];
		$father = $row['father'];
		$mother = $row['mother'];
		$gender = $row['gender'];
		$email = $row['email'];
		$contact = $row['contact'];
		$address = $row['address'];
		$city = $row['city'];
		$state = $row['state'];
		$pin = $row['pin'];
		$country = $row['country'];
		$registration = $row['registration_no'];
		$school12 = $row['school12'];
		$dept = $row['dept'];
		$roll = $row['roll_number'];
		$session = $row['session'];
		$school12 = $row['school12'];
		$percent12 = $row['percent12'];
		$school10 = $row['school10'];
		$percent10 = $row['percent10'];
		$medical = $row['medical'];
	}	
}

?>



<!doctype html>
<html lang="en">
<head>
	<title>User Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<ul class="navigation">
        <li><a>Student Information System</a></li>
        <li style="padding-left: 60%;"><a href="./index.html">Home</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
		<!-- <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
    </ul>

			<div class="registration" style="">
				<h3>Personal Details</h3>
				<!-- <label for="username"> -->
				<span>Username  :  <?php echo htmlentities($username); ?></span>
				<br>
				<br>


				<!-- </label> -->
				<!-- <label for="name"> -->
				<span>Name  :   <i><?php echo htmlentities($name); ?></i></span>
				<br>
				<br>
				<!-- </label> -->
				<label for="father">
					<span>Father's Name  :   <i><?php echo htmlentities($father); ?></i></span>
				<br>
				<br>

				</label>

				<label for="mother">
					<span>Mother's Name  :   <i><?php echo htmlentities($mother); ?></i></span>
				</label>
				<br>
				<br>


				<label for="gender">
					<span>Gender  :   <i><?php echo htmlentities($gender); ?></i></span>
				</label>
				<br>
				<br>

				<label for="email">
					<span>Email id  :   <i><?php echo htmlentities($email); ?></i></span>
				</label>
				<br>
				<br>

				<label for="contact">
					<span>Contact Number  :   <i><?php echo htmlentities($contact); ?></i></span>
				</label>
				<br>
				<br>

				<label for="address">
					<span>Address  :   <i><?php echo htmlentities($var); ?></i></span>

				</label>
				<br>
				<br>

				<label for="city">
					<span>City  :   <i><?php echo htmlentities($city); ?></i></span>
				</label>
				<br>
				<br>

				<label for="state">
					<span>State  :   <i><?php echo htmlentities($state); ?></i></span>

				</label>
				<br>
				<br>

				<label for="pin">
					<span>PIN Code  :   <i><?php echo htmlentities($pin); ?></i></span>

				</label>
				<br>
				<br>

				<label for="country">
					<span>Country  :   <i><?php echo htmlentities($country); ?></i></span>

				</label>
				<br>
				<br>
				<label for="registration">
					<span>registration  :   <i><?php echo htmlentities($registration); ?></i></span>

				</label>
				<br>
				<br>
				<label for="dept">
					<span>dept  :   <i><?php echo htmlentities($dept); ?></i></span>

				</label>
				<br>
				<br>
				<label for="roll">
					<span>roll  :   <i><?php echo htmlentities($roll); ?></i></span>

				</label>
				<br>
				<br>
				<label for="session">
					<span>session  :   <i><?php echo htmlentities($session); ?></i></span>

				</label>
				<br>
				<br>
				<label for="school12">
					<span>school12  :   <i><?php echo htmlentities($school12); ?></i></span>

				</label>
				<br>
				<br>
				<label for="percent12">
					<span>percent12  :   <i><?php echo htmlentities($percent12); ?></i></span>

				</label>
				<br>
				<br>
				<label for="school10">
					<span>school10  :   <i><?php echo htmlentities($school10); ?></i></span>

				</label>
				<br>
				<br>
				<label for="percent10">
					<span>percent10  :   <i><?php echo htmlentities($percent10); ?></i></span>

				</label>
				<br>
				<br>
				<label for="medical">
					<span>medical  :   <i><?php echo htmlentities($medical); ?></i></span>

				</label>
				<br>
				<br>


			
	</div>

</body>
</html>