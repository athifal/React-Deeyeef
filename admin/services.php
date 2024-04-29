<?php
require('top.inc.php');


//including the database connection file


//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$conn = mysqli_connect("localhost", "root", "", "deeyef");
$result = mysqli_query($conn, "SELECT * FROM services ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>



	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		
		<td>PHOTO</td>
        <td>HEADING</td>
        <td>DESCRIPTION</td>
		<td>UPDATE</td>
        <td><a href="addservices.php" >ADD SERVICES+</a></td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
			
		 echo '<td><img src="serviceimage/'. $res['serviceimage'].'" style=" border: 5px solid #eee;box-shadow: 3px 4px 3px rgba(0, 0, 0, 0.3);width: 100px;height: 100px;" /></td>'; 
         echo "<td>".$res['servicehead']."</td>";
		 echo "<td> <textarea cols='25' rows='4'>".$res['servicedescription']."</textarea></td>";
	
         
	
		echo "<td><a href=\"addservices.php\">Add</a> | <td><a href=\"editservice.php?id=$res[id]\">Edit</a> |<a href=\"deleteservice.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>