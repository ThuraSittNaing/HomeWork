<!DOCTYPE html>
<html>
<head>
<style>
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
  <li><a href="about.php">About</a></li>
  <li style="float:right"><a href="#">Exit</a></li>
</ul><br>
    <div style="width: 100%; text-align: center;">
    <b><font size="16" color="5F5F5A">HOMEWORK PROGRAM</font></b></div>
    <br>
    <p><center><font color="5F5F5A"><i>developed by thurasittnaing</i></font></center></p>

<div class="footer"><p>HomeWork Project Program </p></div>
</body>

</html>
