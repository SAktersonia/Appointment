
<?php
  session_start();  
  $con = mysqli_connect('127.0.0.1','root','');
  if (!$con) {
    echo 'Not connected to server';
  }
  if(!mysqli_select_db($con,'appoinment'))
  {
   echo 'Database Not Selected';
  }
  
	  
      $drDep = $_POST['drDep'];
	  $drName = $_POST['drName'];
	  $drID = $_POST['drID'];
	  $drDesc = $_POST['drDesc'];
	  
	$destination = "images/";

$image_name = $_FILES['image']['name'];

// FILE MOVE TO DESTINATION

	
	if($drDep=='' or $drName=='' or $drID=='' or $drDesc==''){
	
	echo "<script>alert('Any of the fields is empty')</script>";
	exit();
	}

	else {

	 move_uploaded_file($_FILES['image']['tmp_name'], $destination.$image_name);
}
      $sql = "INSERT INTO dr (drDep, drName, drID, 
	drDesc, image)
VALUES ('$drDep', '$drName', '$drID', '$drDesc', '$image_name')";

        
        if(mysqli_query($con, $sql))
			header("refresh:1;url=AddConsultants.php");
		else
			echo "Not Update";
		
?>
