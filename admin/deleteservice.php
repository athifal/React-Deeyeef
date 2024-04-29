<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM services WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:services.php");
?>