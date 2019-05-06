<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/background.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/appoinment.css">
</head>
<body>

<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="simple search.php">simple search</a></li>
   <li><a href="appoinment.php">Appointment</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Consultants</a>
    <div class="dropdown-content">
      <a href="Medicin.php">Medicine Specialists</a>
      <a href="Heart.php">Heart Specialists</a>
      <a href="Kidney.php">Kidney Specialists</a>
    </div>
  </li>
</ul>
<p></p>
<div class="" class=""> <div>		 
           <?php 
            $DBhost = "localhost";
            $DBuser = "root";
            $DBpass = "";
            $DBname = "appoinment";
  
            $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
      if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
      }
      $sql = "SELECT id, Patientname, Phone, date, doctorid, message FROM appoinment";
             //$query = "SELECT * FROM appoinment";
            $result = $DBcon->query($sql);
if ($result->num_rows > 0)
            ?>
            <table id="customers">
            <tr>
            <th>Id</th>
            <th>Patient Name</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Doctorid</th>
            <th>Message</th>			
            </tr>
           <?php
           while($row = $result->fetch_assoc()){
           $id = $row['id'];
           $Patientname = $row['Patientname'];
		   $Phone = $row['Phone'];
		   $date = $row['date'];
		   $doctorid = $row['doctorid'];
		   $message = $row['message'];
           echo"<tr>";
           echo"<td>$id</td>";
           echo"<td>$Patientname</td>";
		   echo"<td>$Phone</td>";
           echo"<td>$date</td>";
		   echo"<td>$doctorid</td>";
           echo"<td>$message</td>";
           echo"</tr>";
            }
           ?>
		 </div></div>
 <div class="footer">
  <p>2018</p>
</div>
</body>
</html>
