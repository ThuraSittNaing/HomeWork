<?php
include "config/dbconnect.php";


$brandname = $_POST ['bname'];
$model = $_POST ['model'];
$releasedate = $_POST ['rdate'];
$price = $_POST ['price'];
$deliverdate = $_POST ['ddate'];


echo $brandname;
echo "<br>";
echo $model;
echo "<br>";
echo $releasedate;
echo "<br>";
echo $price;
echo "<br>";
echo $deliverdate;
echo "<br>";




$dbconnect = mysqli_connect('localhost','root','','homework1');
$sql = mysqli_query($dbconnect,"INSERT INTO phone(id,brandname,model,releasedate,price,deliverdate) VALUES('','$brandname','$model','$releasedate','$price','$deliverdate')");
if($sql){
    echo "Data Insered Sucessfully";
}
else{
    echo "Failed to insered";
}

?>

