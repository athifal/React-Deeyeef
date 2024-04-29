<?php
// including the database connection file
include_once("config.php");
require('top.inc.php');

if(isset($_POST['update']))
{	
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
	$head = mysqli_real_escape_string($conn, $_POST["head"]);
	$descri = mysqli_real_escape_string($conn, $_POST['descri']);
	
	move_uploaded_file($_FILES["photo"]["tmp_name"],"testiimages/" . $_FILES["photo"]["name"]);			
$photo=$_FILES["photo"]["name"];	
	// checking empty fields
	if(empty($head) || empty($descri) || empty($photo)) {
				
		if(empty($head)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($descri)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($photo)) {
			echo "<font color='red'>Photo field is empty.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}else {	
		//updating the table
		$result = mysqli_query($conn, "UPDATE testi SET  testihead='$head',testmessage='$descri',testiimage='$photo' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: testi.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM testi WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
	$head = $res['testihead'];
	$descri = $res['testmessage'];
	
	$photo = "testiimages/" .$res['testiimage'];

}

?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	<br/><br/>
	
	<form name="form1" method="post" action="edittesti.php" enctype="multipart/form-data">
		<table border="0">
			<tr> 
				<td>HEADING</td>
				<td><input type="text" name="head" value="<?php echo $head;?>"></td>
			</tr>
			<tr> 
				<td>MESSAGE</td>
				<td><input type="text" name="descri" value="<?php echo $descri;?>"></td>
			</tr>
			
			<tr> 
				<td>PHOTO</td>
				<td><input type="file" name="photo" value="<?php echo "<img src=".$photo;?>" ></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
    
</body>
</html>