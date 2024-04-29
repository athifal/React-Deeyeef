<?php
require('top.inc.php');


//including the database connection file


//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$conn = mysqli_connect("localhost", "root", "", "deeyef");
$result = mysqli_query($conn, "SELECT * FROM logo ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>logopage</title>
</head>

<body>



	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		
		<td>LOGOS</td>
		<td>UPDATED</td>
        <td><a href="addlogo.php" >ADD LOGO+</a></td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
			
		 echo '<td><img src="logoimage/'. $res['logos'].'" style=" border: 5px solid #eee;box-shadow: 3px 4px 3px rgba(0, 0, 0, 0.3);width: 100px;height: 100px;" /></td>';   
	
		echo "<td><a href=\"addlogo.php\">Add</a> | <a href=\"logodelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>