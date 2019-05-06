<?php
include 'config.php';


?>
<!Doctype html>
<html>
<head>
	<link rel="stylesheet" href="web.css"></link>

	<title>Login Form</title>
	<h2 class="h" align="center">Welcome to  patient Login</h2>
</head>
<body id="b">
<div id="d">
	
	<form action="login.php" method="post" align="center">
		<center>
	<img src="log.jpg" class="img"></center>
	<b>
		
		<b>
			<br>
		<label>User Email</label>
		<input name="email" type="email" id="form" placeholder="Enter Your Email" required></input>
		
		<b>
		<label>User password</label>
		<input name="pass" type="password" id="form" placeholder="Enter Your Password" required></input>
		
		<b>
		

		<input name="Login" type="submit" id="button" value="Login"></input>
		<br><br>
		<a href="reg.php"><input name="reg" type="button" id="button" value="Registartion"></input>
       
  


	</form>
	<?php
if(isset($_POST['Login']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	$query="select * from patient where email='$email' And pass='$pass'";
	$check=mysqli_query($con,$query);

if($check){
     if(mysqli_num_rows($check) > 0 ){

     	echo"
     	 <script>
     	 alert('You are Successfully Logged In');
     	 window.location.href='index.html';
     	 </script>
     	";

     }
     else{
     	

     	echo"
     	 <script>
     	 alert('Email or password not correct !');
     	 window.location.href='login.php';
     	 </script>
     	";

     }
}
else{


     	echo"
     	 <script>
     	 alert('database error');
     	 window.location.href='login.php';
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
