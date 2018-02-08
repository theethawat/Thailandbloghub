<?php
$username=$_POST["username"];
$nameser=$_POST["nameser"];
$email=$_POST["email"];
$password=$_POST["password"];
$conn=mysqli_connect("localhost","root","","thailandbloghub");

$sql="INSERT INTO member (Usrname,NameandSur,Email,Password) VALUES('$username','$nameser','$email','$password')";
?>