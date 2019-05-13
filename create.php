<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
label{
    float: left;
    width: 150px;
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
}
label{
    float: left;
    width: 150px;
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
<div style="margin-left: 500px;position: fixed;">

<form action="insert.php" method="post">
    
  
    <label>Brand name</label><br>
    <input type="text" name="bname"><br>

    <label>Model</label><br>
    <input type="text" name="model"><br>

    <label>Release Date</label><br>
    <input type="date" name="rdate"><br>

    <label>Price</label><br>
    <input type="text" name="price"><br>

    <label>Deliver Date</label><br>
    <input type="date" name="ddate"><br><br>

    <input type="submit" name="submit" value="Confirm"class="btn btn-dark">
    <button type="button" class="btn btn-dark"><a href="product.php">Back</a></button>


    

    </form>
</div>
</body>



</html>
