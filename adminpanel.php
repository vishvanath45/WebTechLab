<?php
session_start();

$connection = mysqli_connect('localhost','root','toor','password');
if(!$connection){
	die("unable to connect to mysql");
}



$q = "select username,name from user_data where verified = 0";

$query = mysqli_query($connection,$q);





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
        <li><a>Admin Portal </a></li>
        <li style="padding-left: 60%;"><a href="./index.html">Home</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
		<!-- <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
    </ul>

    		<form method = "POST">
			<div class="registration" style="">

				<h3>Waiting requests</h3>

				<?php 

				if($query->num_rows > 0)
				
					{
						while($row = $query->fetch_assoc())
						{	
							$username = $row['username'];
							$name = $row['name'];
							
					

				?>

				<!-- <label for="username"> -->
				<span>Username  :   <i><?php echo htmlentities($username); ?></i></span>

				<br>
				 



				<!-- </label> -->
				<!-- <label for="name"> -->
				<span>Name  :   <i><?php echo htmlentities($name); ?></i></span>
				<br>
				<span>Accept  :  </span>

				<input type = "checkbox" value = "None" name = "<?php echo htmlentities($username); ?>"/ >
				<br>
				<br>
				<?php
						}
					}

				?>

				<input type = "submit" name = "accept" class= "button" formaction = "acceptreq.php" value = "accept"/>
				<input type = "submit" name = "cancel " class= "button" formaction = "rejectreq.php" value = "reject"/>

			</form>

				<!-- </label> -->
				
			
	</div>

</body>
</html>