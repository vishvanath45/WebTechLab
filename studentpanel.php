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
				<span>Username  :   <i><?php echo htmlentities($username); ?></i></span>
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

				<!-- <label for="nation">
					<span>Nationality</span>
					<input type="text" id="nation" minlength="3" required>
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only letters</li>
					</ul>
				</label>
			</div>
			<div class="registration" style="float: right;">
				<h3>Educational Details</h3>
				<label for="registration">
					<span>Registration Number</span>
					<input type="text" name="registration" minlength="8" required>
				</label><br><br>
				<label for="dept">
					<span>Department of</span>
					<input type="text" name="dept" minlength="3" required>
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only alphabets</li>
					</ul>
				</label>
				<label for="roll">
					<span>Roll Number</span>
					<input type="text" name="roll" minlength="3" placeholder = "XX/YY/ZZ" required >
					<ul class="input-requirements">
						<li>Should be in format YY/Branch/Rollno.</li>
					</ul>
				</label>
				<label for="session">
					<span>Session</span>
					<input type="text" name="session" placeholder = "YYYY-YYYY" required >
					<ul class="input-requirements">
						<li>Year of joining college to year of expected passout</li>
					</ul>
				</label>
				<p>Semester :
				    <select>
					    <option value="1">1</option>
					    <option value="2">2</option>
					    <option value="3">3</option>
					    <option value="4">4</option> 
					    <option value="5">5</option>
					    <option value="6">6</option>
					    <option value="7">7</option>
					    <option value="8">8</option>
					</select>
				</p>
				<hr> -->
				<!-- <h3>Class 12 Details</h3>
				<label for="school12">
					<span>School Name</span>
					<input type="text" name="school12" minlength="3" required >
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only alphabets</li>
					</ul>
				</label>
				<label for="affiliated12">
					<span>Affiliated to</span>
					<input type="text" name="affiliated12" minlength="3" required >
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only alphabets</li>
					</ul>
				</label>
				<label for="percent12">
					<span>Percentage</span>
					<input type="text" name="percent12" minlength="3" required >
					<ul class="input-requirements">
						<li>Calculated w.r.t. 100%</li>
					</ul>
				</label>
				<label for="pass12">
					<span>Passing Year</span>
					<input type="number" name="pass10" min="1990" max="2100" required >
				</label><br><br><hr>
				<h3>Class 10 Details</h3>
				<label for="school10">
					<span>School Name</span>
					<input type="text" name="school10" minlength="3" required >
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only alphabets</li>
					</ul>
				</label>
				<label for="affiliated10">
					<span>Affiliated to</span>
					<input type="text" name="affiliated10" minlength="3" required >
					<ul class="input-requirements">
						<li>At least 3 characters long</li>
						<li>Must contain only alphabets</li>
					</ul>
				</label>
				<label for="percent10">
					<span>Percentage</span>
					<input type="text" name="percent10" minlength="3" required >
					<ul class="input-requirements">
						<li>Calculated w.r.t. 100%</li>
					</ul>
				</label>
				<label for="pass10">
					<span>Passing Year</span>
					<input type="number" name="pass10" min="1990" max="2100" required >
				</label><br><br><hr>
				<h3>Medical Details</h3>
				<label for="medical">
					<span>Medical History(if any)</span>
					<textarea  name="medical" rows="3" cols="25"></textarea>
					<ul class="input-requirements">
						<li>Optional</li>
					</ul>
				</label> -->
			
	</div>

</body>
</html>