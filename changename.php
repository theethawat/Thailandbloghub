<?php
session_start();
$user=$_SESSION["user"];
$conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
$newname=$_POST["nameandsur"];
$sql="UPDATE member SET NameandSur ='$newname' WHERE Usrname='$user' ";
if($conn->query($sql) == TRUE)
{
    echo "<meta http-equiv='refresh'content='0; url=setting.php'>";
}
else
{
    echo "Error deleting record: " . $conn->error;
}

?>