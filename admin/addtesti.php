<html>
<head>
	<title>Add Data</title>
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

<?php
//including the database connection file
include_once("config.php");
require('top.inc.php');

if(isset($_POST['Submit'])) {	
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
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO testi(testiimage,testihead,testmessage) VALUES('$photo','$head','$descri')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='testi.php'>View Result</a>";
	}
}
?>






















	

    <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>ADD TESTIMONIALS</strong> </div>

	<form action="addtesti.php" method="post" name="form1" enctype="multipart/form-data">
		<table width="25%" border="0">
        <div class="card-body card-block">
							   <div class="form-group">
				
			<tr> 
				<td>HEADING</td>
				<td><input type="text" name="head"></td>
			</tr>
			<tr> 
				<td>MESSAGE</td>
				<td><textarea  name="descri" class="textare"></textarea></td>
			</tr>
			
			<tr> 
				<td>Photo</td>
				<td><input type="file" name="photo"  ></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
            </div> </div>
		</table>
	</form>
    <div class='field_error'>
    <a href="testi.php">view</a></div>
    </div>

    </div>
     </div>
               </div>
            </div>
         </div>
</body>
</html>
