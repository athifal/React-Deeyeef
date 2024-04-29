<html>
<head>
	<title>Add Data</title>
    
</style>
</head>

<body>

<?php
//including the database connection file
include_once("config.php");
require('top.inc.php');

if(isset($_POST['Submit'])) {	
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
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO gallary(gallaryimage,gallaryhead) VALUES('$photo','$head')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='gallary.php'>View Result</a>";
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>ADD IMAGES</strong> </div>

	<form action="addgallary.php" method="post" name="form1" enctype="multipart/form-data">
		<table width="25%" border="0">
        <div class="card-body card-block">
							   <div class="form-group">
				
			<tr> 
				<td>HEADING</td>
				<td><input type="text" name="head"></td>
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
    <a href="gallary.php">view gallery</a></div>
    </div>

    </div>
     </div>
               </div>
            </div>
         </div>
</body>
</html>