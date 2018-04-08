<?php
session_start();
$user=$_SESSION["user"];
$follow=$_POST["follow"];

$conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
$userfollowtable=$user."_following";
$sql="INSERT INTO $userfollowtable (followingname) VALUES ('$follow') ";

if ($conn->query($sql) === TRUE) {
    echo "  <meta http-equiv='refresh' content='0; url=index.php' >";
} else {
    echo "Error Updating record: " . $conn->error;
}

?>