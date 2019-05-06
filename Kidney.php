<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/background.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/Medicin.css">
</head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #f2f2f2;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<body>

<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="service.html">Services</a></li>
  <li><a href="appoinment.php">Appoinment</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Consultants</a>
    <div class="dropdown-content">
      <a href="Medicin.php">Medicin Specialists</a>
      <a href="Heart.php">Heart Specialists</a>
      <a href="Kidney.php">Kidney Specialists</a>
    </div>
  </li>
</ul>
<p></p>
<div class="" class="">
 <?php 
            $DBhost = "localhost";
            $DBuser = "root";
            $DBpass = "";
            $DBname = "appoinment";
  
            $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
      if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
      }
	  $Medicin = "Kidney";
      $sql = "SELECT id, drDep, drName, drID, drDesc, image FROM dr WHERE drDep='$Medicin'";
             
            $result = $DBcon->query($sql);
if ($result->num_rows > 0)
	?>
            <table id="customers" width= "50%">
           
           <tr>
		   <th>Doctor department</th>
           <th>Name</th>
		   <th>Doctor Id</th>
		   <th>Doctor Description</th>
		   <th>Doctor Picture</th>
		   </tr>
		   <?php
           while($row = $result->fetch_assoc()){
           $id = $row['id'];
           $drDep = $row['drDep'];
		   $drName = $row['drName'];
		   $drID = $row['drID'];
		   $drDesc = $row['drDesc'];
		   $image = $row['image'];
          
		   echo"<tr>";
		   echo"<td>$drDep</td>";
		   echo"<td>$drName</td>";
           echo"<td>$drID</td>";
		   echo"<td>$drDesc</td>";
		   ?>
		  <th><img src="images/<?php echo $image; ?>" width="100%" height="auto" /></th>
		   <?php
		   echo"</tr>";
		   
            }
           ?>
</div>
 <div class="footer">
  <p>2018</p>
</div>
</body>
</html>
