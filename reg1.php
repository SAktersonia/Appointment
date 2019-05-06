<?php

include 'config.php';

?>
<!Doctype html>
<html>
<head>
	<link rel="stylesheet" href="web.css"></link>
	<title> Registration Form</title>
	<h2 class="h" align="center">Welcome to Doctor Registration</h2>
	
</head>
<body id="b">
<div id="d">
	
	<form action="reg1.php" method="post" align="center">
		<center>
	<img src="doc.jpg" class="img"></center>
	<b>
		<label>User Name</label>
		<input name="name" type="text" id="form" placeholder="Enter Your Name" required></input>
		<br>
		<b>
		<label>User Email</label>
		<input name="email" type="email" id="form" placeholder="Enter Your Email" required></input>
		<br>
		<b>
		<label>User password</label>
		<input name="pass" type="password" id="form" placeholder="Enter Your Password" required></input>
		<br>
		<b>
		<label>Confirm password</label>
		<input name="cpass" type="password" id="form" placeholder="confirm Your Password" required></input>
		<input name="reg1" type="submit" id="button" value="Sign-Up"></input>
		<a href="login1.php"><input name="Back to Login" type="button" id="button" value="Back to Login"></input>



	</form>



	<?php
if(isset($_POST['reg1']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

if($pass==$cpass){

	$query="select*from doctor where email='$email'";
	$query_check=mysqli_query($con,$query);


	if($query_check){

		if(mysqli_num_rows($query_check> 0)){

			echo"
            <script>
             alert('Email already in use');
             window.location.href='login1.php';

            </script>
            
			";

		}
		else{

			$insertion="insert into doctor values('$name','$email','$pass')";
			$run=mysqli_query($con,$insertion);
			if($run){
				echo"
            <script>
             alert('You are successfully Registered');
             window.location.href='home.php';

            </script>
            
			";

			}
			else{

					echo"
            <script>
             alert('Connection Failed');
             window.location.href='reg1.php';

            </script>
            
			";
			}
		}

	}

	else{
			echo"
            <script>
             alert('Database Error');
             window.location.href='reg1.php';

            </script>
            
			";
	}

}
else{

	echo"
            <script>
             alert('password & confirm-password Doesn't match);
             window.location.href='home.php';

            </script>
            
			";
}

}
else{
	
}


?>	

</div>

	</body>


</html>
