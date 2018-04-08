<?php
session_start();
$user=$_SESSION["user"];
 $conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
 $greeting=$_POST["greeting"];
$sql="UPDATE member SET Greeting ='$greeting' WHERE Usrname='$user' ";
if($conn->query($sql)==TRUE)
{
    echo "  <meta http-equiv='refresh' content='0; url=profile.php' >";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>