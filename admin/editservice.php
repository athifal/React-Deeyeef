<?php
// including the database connection file
include_once("config.php");
require('top.inc.php');

if(isset($_POST['update']))
{	
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
	$head = mysqli_real_escape_string($conn, $_POST["head"]);
	$descri = mysqli_real_escape_string($conn, $_POST['descri']);
	
	move_uploaded_file($_FILES["photo"]["tmp_name"],"serviceimage/" . $_FILES["photo"]["name"]);			
$photo=$_FILES["photo"]["name"];	
	// checking empty fields
	if(empty($head) || empty($descri)) {
				
		if(empty($head)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($descri)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE services SET  servicehead='$head',servicedescription='$descri',serviceimage='$photo' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: services.php");
	}
}
?>
<?php
//getting id from url
$id= $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM services WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
	$head = $res['servicehead'];
	$descri = $res['servicedescription'];
	
	$photo = $res['serviceimage'];
}

?>
<html>
<head>	
	<title>Edit Data</title>
	<style> 
.textare {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editservice.php" enctype="multipart/form-data">
		<table border="0">
			<tr> 
				<td>head</td>
				<td><input type="text" name="head" value="<?php echo $head;?>"></td>
			</tr>
			<tr> 
				<td>descrimination</td>
				<td><textarea  name="descri" class="textare"><?php echo $descri;?></textarea></td>
			</tr>
			
			<tr> 
				<td>Photo</td>
				<td><input width="200" height="200" type="file" name="photo" src="<?php echo "serviceimage/".$photo;?>" ></td>
				
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>