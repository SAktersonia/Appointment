<?php
$connection = mysqli_connect('localhost', 'root', '', 'appoinment');
$query = "SELECT Category FROM search ORDER BY Category ASC";
$result = mysqli_query($connection, $query);

$query1 = "SELECT `Hospital Name` FROM search ORDER BY `Hospital Name` ASC";
$result1 = mysqli_query($connection, $query1);

$query2 = "SELECT Area FROM search ORDER BY Area ASC";
$result2 = mysqli_query($connection, $query2);
?>

<!DOCTYPE html>
<html>
<head>
<style>
.table_detail_data{
  border: 1px solid black;
  border-collapse: collapse;
}
.table_detail_header{
  border: 1px solid black;
  border-collapse: collapse;
}
.table_detail_row{
  border: 1px solid black;
  border-collapse: collapse;
}

</style>

<link rel="stylesheet" href="css/background.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/appoinment.css">
</head>
<body>
<div class="example1" class="img2">
<form action="simple search.php" method="post">
<table>
	<tr>
		<td>
			<label for="category_name">Category</label>
			<select name="category_name" id="category_name" class="form-control">
				<option value="">Category Search</option>
				<?php 
					while($row = mysqli_fetch_array($result))
					{
						echo '<option value="'.$row["Category"].'">'.$row["Category"].'</option>';
					}
				?>
			</select>
		</td>
		
		<td>
			<label for="hospital_name">Hospital</label>
			<select name="hospital_name" id="hospital_name" class="form-control">
				<option value="">Hospital Search</option>
				<?php 
					while($row = mysqli_fetch_array($result1))
					{
						echo '<option value="'.$row["Hospital Name"].'">'.$row["Hospital Name"].'</option>';
					}
				?>
			</select>
		</td>
		

		<td>
			<label for="area_name">Area</label>
			<select name="area_name" id="area_name" class="form-control">
				<option value="">Area Search</option>
				<?php 
					while($row = mysqli_fetch_array($result2))
					{
						echo '<option value="'.$row["Area"].'">'.$row["Area"].'</option>';
					}
				?>
			</select>
		</td>
	</tr>
	
	<tr><td><input id="search" type="submit" value="submit" name="submit"></td></tr>
	<tr><td><input type="button" value="refresh" onclick="return RefreshWindow();"/></td></tr>
	</form>
</table>
</div>
<br/>
<br/>
<div>
<table class="table_detail_data" style="width:100%">
  <tr>
    <th class="table_detail_header">Doctor Name</th>
    <th class="table_detail_header">Category</th> 
    <th class="table_detail_header">Hospital Name</th>
    <th class="table_detail_header">Area Name</th>
  </tr>
  
<?php
if(isset($_POST['submit'])){
$category = $_POST['category_name'];
$hospital = $_POST['hospital_name'];
$area = $_POST['area_name'];

//get results from database
$result = mysqli_query($connection,"SELECT * FROM search where Category='$category' or `Hospital Name` = '$hospital' or Area = '$area'");

//showing all data
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    echo "<tr>";
        echo '<td class="table_detail_row">' . $row["Name"] . '</td>';
        echo '<td class="table_detail_row">' . $row["Category"] . '</td>';
        echo '<td class="table_detail_row">' . $row["Hospital Name"] . '</td>';
        echo '<td class="table_detail_row">' . $row["Area"] . '</td>';
    echo '</tr>';
}
}
else{
//get results from database
$result = mysqli_query($connection,"SELECT * FROM search");

//showing all data
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    echo "<tr>";
        echo '<td class="table_detail_row">' . $row["Name"] . '</td>';
        echo '<td class="table_detail_row">' . $row["Category"] . '</td>';
        echo '<td class="table_detail_row">' . $row["Hospital Name"] . '</td>';
        echo '<td class="table_detail_row">' . $row["Area"] . '</td>';
    echo '</tr>';
}
}
?>
</table>
</div>

</body>
<script>
function RefreshWindow()
{
    // window.location.reload(true);
	window.location.href = "home.php";
}
</script>
<div class="footer">
	<p>2019</p>
</div>

</html>