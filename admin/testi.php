<?php
require('top.inc.php');


//including the database connection file


//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$conn = mysqli_connect("localhost", "root", "", "deeyef");
$result = mysqli_query($conn, "SELECT * FROM testi ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>testimonials</title>
</head>

<body>



	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		
		<td>PHOTO</td>
        <td>HEADING</td>
        <td>MESSAGE</td>
		<td>Update</td>
        <td><a href="addtesti.php" >add testimonials</a></td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
			
		 echo '<td><img src="testiimages/'. $res['testiimage'].'" style=" border: 5px solid #eee;box-shadow: 3px 4px 3px rgba(0, 0, 0, 0.3);width: 100px;height: 100px;" /></td>'; 
         echo "<td>".$res['testihead']."</td>";
		 echo "<td> <textarea cols='25' rows='4'>".$res['testmessage']."</textarea></td>";
	
         
	
		echo "<td><a href=\"addtesti.php\">Add</a> | <td><a href=\"edittesti.php?id=$res[id]\">Edit</a> |<a href=\"deletetesti.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>