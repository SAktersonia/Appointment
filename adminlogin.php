<?php

session_start();  
  
$user = $_POST['user'];
$password = $_POST['password'];

if($user && $password)
{
	$DBhost = "localhost";
  $DBuser = "root";
  $DBpass = "";
  $DBname = "appoinment";
  
  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
	$sql = "SELECT user, password FROM user WHERE user='$user' AND password='$password'";
	//$query = mysqli_query("SELECT * FROM user WHERE user='$user' AND password='$password'");
	$result = $DBcon->query($sql);
if ($result->num_rows > 0)
	while($row = $result->fetch_assoc()) {
		{
			$dbusername = $row['user'];
			$dbpassword = $row['password'];
			
		}
		if($user==$dbusername && $password==$dbpassword)
		{
			
				header("Location: adminlogin2.php");
			
			
			
		}
		else
			echo"incorrect password";
	}
	else
		die("That user doesn't exist!");
	//echo $numrows;//
	
}
else
	die("Please enter username and password");
?>