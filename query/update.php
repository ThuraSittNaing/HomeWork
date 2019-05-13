<?php
include "../config/dbconnect.php";

$id = $_POST ['id'];
$brandname = $_POST ['bname'];
$model = $_POST ['model'];
$releasedate = $_POST ['rdate'];
$price = $_POST ['price'];
$deliverdate = $_POST ['ddate'];


// echo $brandname;
// echo "<br>";
// echo $model;
// echo "<br>";
// echo $releasedate;
// echo "<br>";
// echo $price;
// echo "<br>";
// echo $deliverdate;
// echo "<br>";




$dbconnect = mysqli_connect('localhost','root','','homework1');
$result = mysqli_query($dbconnect,"UPDATE phone SET brandname='$brandname',model='$model',releasedate='$releasedate',price='$price',deliverdate='$deliverdate' WHERE id='$id'");
if($result){
    echo "Data Update Sucessfully";
}
else{
    echo "Failed to updated";
}
header("Location: http://localhost/homework1/product.php");
?>