<html>
<head>
	<title>Addlogo</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
require('top.inc.php');

if(isset($_POST['Submit'])) {	 {
    //declaring variables
    $filename = $_FILES['photo']['name'];
    $filetmpname = $_FILES['photo']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'logoimage/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($filetmpname, $folder.$filename);
    //inserting image details (ie image name) in the database
    $sql = "INSERT INTO `logo` (`logos`) VALUES ('$filename')";
    $qry = mysqli_query($conn, $sql);
    if( $qry) {
    echo $filename ,"<span><div class='field_error'>uploaded</div><span>";
    }
    }
}

?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>ADD LOGOS</strong> </div>
	
<form action="addlogo.php" method="post" name="form1" enctype="multipart/form-data">
		<table width="25%" border="0">
        <div class="card-body card-block">
							   <div class="form-group">
				
			
			<tr> 
				<td> <input type="file" name="photo"  ></td>
                </div>
				<td><input type="submit" name="Submit" value="add"></td>
</tr>
		

            </div>
		</table>
	</form>
    <div class='field_error'>
    <a href="logo.php">back to logo</a></div>
    </div>
     </div>
               </div>
            </div>
         </div>

    



                        <!-- <form action="addbanner.php" method="post" name="form1" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
                               <input type="file" name="photo"  >
								</div>
							   <button id="payment-button" name="submit" type="submit" value="Add" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">SUBMIT</span>
							   </button>
							   <a href="banner.php">back to banner</a></div>
							</div>
						</form> -->
                   
</body>
</html>
