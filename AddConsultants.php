<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/background.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/appoinment.css">
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<?php 
            $DBhost = "localhost";
            $DBuser = "root";
            $DBpass = "";
            $DBname = "appoinment";
  
            $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
      if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
      }
	  $Medicin = 100;
      $sql = "SELECT id, drDep, drName, drID, drDesc, image FROM dr";
             
            $result = $DBcon->query($sql);
if ($result->num_rows > 0)
	?>
          
		   <?php
           while($row = $result->fetch_assoc()){
           $id = $row['id'];
           $drDep = $row['drDep'];
		   $drName = $row['drName'];
		   $drID = $row['drID'];
		   $drDesc = $row['drDesc'];
		   $image = $row['image'];
          $Medicin =$Medicin + 1;
		  
          }
           ?>

<ul>
  <li><a href="adminlogin2.php">Home</a></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Consultants</a>
    <div class="dropdown-content">
      <a href="Medicin.php">Medicine Specialists</a>
      <a href="Heart.php">Heart Specialists</a>
      <a href="Kidney.php">Kidney Specialists</a>
    </div>
  </li>
</ul>

<h3></h3>
<p></p>
<div class="" class="">

<section class="">
				<div class="">
					<div class="">
						<div class="">
							<img class="img-fluid" src="doc.jpg" alt="">
						</div>
						<div class="">
							<h1>Add Consultants</h1>
							
							
  <form method="post" class="" id="" action="AddConsultants1.php" enctype="multipart/form-data">
    <label for="country">Department</label>
    <select id="country" name="drDep">
      <option value="Medicin">Medicine</option>
      <option value="Heart">Heart</option>
      <option value="Kidney">Kidney</option>
    </select>
	    <label for="fname">Doctor Name</label>
    <input type="text" id="fname" name="drName" placeholder="Doctor Name..">
	 <label for="fname">Doctor ID</label>
    <input type="text" id="fname" name="drID" value="<?=$Medicin;?>">
	 <label for="fname">Doctor Description</label>
    <input type="text" id="fname" name="drDesc" placeholder="Doctor Description">
	 <input type="file" name="image" id="fileToUpload">
  
    <input type="submit" value="Submit">
  </form>


							</div>
						</div>
					</div>
		
			</section>

</div>

<div class="footer">
  <p>2019</p>
</div>
</body>
</html>
