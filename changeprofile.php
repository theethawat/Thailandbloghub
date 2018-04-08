<?php
session_start();
$user=$_SESSION["user"];
 $conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");

 move_uploaded_file($_FILES["profilephoto"]["tmp_name"],"Profile/".$_FILES["profilephoto"]["name"]);
    $filename=$_FILES["profilephoto"]["name"];


$sql="UPDATE member SET Profilepic ='$filename' WHERE Usrname='$user' ";
if($conn->query($sql)==TRUE)
{
    echo "  <meta http-equiv='refresh' content='0; url=profile.php' >";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>