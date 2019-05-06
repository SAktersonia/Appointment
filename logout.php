<?php
include 'config.php';


?>
<!Doctype html>
<html>
<head>
	<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/background.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/appoinment.css">
<li><a href="login1.php"> Doctor Login</a></li>
<li><a href="login.php">Patient Login</a></li>
<li><a href="Admin.php">Admin Login</a></li>
	
</head>
<body id="b">
<div id="d">
	
	<form action="logout.php" method="post" align="center">

		
		



	</form>
	<?php
  if(isset($_POST['logout'])){
    echo"
<script>
alert('You are Successfully logged out');
window.location.href='login1.php';
</script>

    ";

  }
else{
}
  ?>

</body>
</html>