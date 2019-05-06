
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
      $Patientname = $_POST['Patientname'];
	  $Phone = $_POST['Phone'];
	  $date = $_POST['date'];
	  $doctorid = $_POST['doctorid'];
	  $message = $_POST['message'];

      $sql = "INSERT INTO appoinment (Patientname, Phone, date, 
	doctorid, message)
VALUES ('$Patientname', '$Phone', '$date', '$doctorid', '$message')";

        
        if(mysqli_query($con, $sql))
			header("refresh:1;url=appoinment.php");
		else
			echo "Not Update";	     
?>
