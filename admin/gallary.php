<?php
require('top.inc.php');


//including the database connection file


//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$conn = mysqli_connect("localhost", "root", "", "deeyef");
$result = mysqli_query($conn, "SELECT * FROM gallary ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>gallery</title>
</head>

<body>



	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		
		<td>PHOTO</td>
        <td>HEADING</td>
		<td>UPDATE</td>
        <td><a href="addgallary.php" >ADD TO GALLERY</a></td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
			
		 echo '<td><img src="gallaryimages/'. $res['gallaryimage'].'" style=" border: 5px solid #eee;box-shadow: 3px 4px 3px rgba(0, 0, 0, 0.3);width: 100px;height: 100px;" /></td>'; 
         echo "<td>".$res['gallaryhead']."</td>";
		 
	
         
	
		echo "<td><a href=\"addgallary.php\">Add</a> | <td><a href=\"editgallary.php?id=$res[id]\">Edit</a> |<a href=\"deletegallary.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>