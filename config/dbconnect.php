<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "homework1";

// Create connection
//$conn = new mysqli($servername, $username, $password, $database);
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: . $conn->connect_error");
}
//echo "Connected successfully";
?>

