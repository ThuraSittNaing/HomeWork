<?php
//including the database connection file 
include "../config/dbconnect.php";

//getting id of the data from url
$id=$_GET['id'];

//deleting the row from table
$result=mysqli_query($conn, "DELETE FROM phone WHERE id=$id");

//redirecting to the display page (indext.php in our case)
header("Location: http://localhost/homework1/product.php");