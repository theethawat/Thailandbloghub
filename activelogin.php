<?php
$email=$_POST["email"];
$password=$_POST["password"];

session_start();

$conn=mysqli_connect("localhost","root","","thailandbloghub");
$sql="SELECT * FROM member WHERE Email='$email' ";
$memo=mysqli_query($conn,$sql);

if($memo==NULL)
{
    echo "<h5>ล็อกอินผิดพลาด Username ของคุณผิดอยู่</h5>";
    echo "  <meta http-equiv='refresh' content='0; url=login.php' >";
}

$row = mysqli_fetch_assoc($memo);
$truepassword=$row["Password"];

if($password ==$truepassword)
{
    $_SESSION["user"]=$row["Usrname"];
    echo "  <meta http-equiv='refresh' content='0; url=index.php' >";
}
else
{
    echo "<h5>ล็อกอินผิดพลาด Password ของคุณผิดอยู่</h5>";
    echo "  <meta http-equiv='refresh' content='0; url=login.php' >";
}

?>