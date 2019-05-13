<?php
include "config/dbconnect.php";

$result = mysqli_query($conn, "SELECT * FROM phone ORDER BY id ASC");
//$res = mysqli_fetch_array($result);
//var_dump ($res);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    
#data_table{
    width: 100%;
    height: auto;

}

.footer{
    background-color: #5F5F5A;
    position: fixed;
    width: 100%;
    text-align: center;
    bottom: 0;
    color: white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #5F5F5A;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #0DE8CA;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="product.php">Product</a></li>
  <li><a href="#">Login</a></li>
  <li><a href="#">About</a></li>
  <li style="float:right"><a href="#">Exit</a></li>
</ul><br>
<div class="footer"><p>HomeWork Project Program </p></div>
<br>
<button type="button" class="btn btn-dark">
    <a href="create.php">Add New Phone</a></button>
<br><br>

<table border="1" id="data_table">
        <tr>
            <th>ID</th>
            <th>Brand Name</th>
            <th>Model</th>
            <th>Release Date</th>
            <th>Price</th>
            <th>Deliver Date</th>
            <th>Action</th>
        </tr>
    
            
        <?php
        while($res = mysqli_fetch_array ($result)){
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['brandname']."</td>";
            echo "<td>".$res['model']."</td>";
            echo "<td>".$res['releasedate']."</td>";
            echo "<td>".$res['price']."</td>";
            echo "<td>".$res['deliverdate']."</td>";

            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> |
            <a href=\"query/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')
            \">Delete</a></td>";
            echo "</tr>";
        }
    ?>


</table>


</body>

</html>
