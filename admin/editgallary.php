<?php
// including the database connection file
include_once("config.php");
require('top.inc.php');

if(isset($_POST['update']))
{	
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
	$head = mysqli_real_escape_string($conn, $_POST["head"]);
	
	
	move_uploaded_file($_FILES["photo"]["tmp_name"],"gallaryimages/" . $_FILES["photo"]["name"]);			
$photo=$_FILES["photo"]["name"];	
	// checking empty fields
	if(empty($head) ||  empty($photo)) {
				
		if(empty($head)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
	
		
		if(empty($photo)) {
			echo "<font color='red'>Photo field is empty.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE gallary SET  gallaryhead='$head',gallaryimage='$photo' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: gallary.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM gallary WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    
	$head = $res['gallaryhead'];
	
	
	$photo = '<img src="gallaryimage/'. $res['gallaryimage'].'" style=" border: 5px solid #eee;box-shadow: 3px 4px 3px rgba(0, 0, 0, 0.3);width: 100px;height: 100px;">';

}

?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editgallary.php" enctype="multipart/form-data">
		<table border="0">
			<tr> 
				<td>head</td>
				<td><input type="text" name="head" value="<?php echo $head;?>"></td>
			</tr>
			
			
			<tr> 
				<td>Photo</td>
				<td><input type="file" name="photo" value="<?php echo $photo;?>" ></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>