<?php
session_start();
$user=$_SESSION["user"];
$follow=$_POST["follow"];

$conn = mysqli_connect("localhost","root","","thailandbloghub");
$userfollowtable=$user."_following";
$sql="INSERT INTO $userfollowtable (followingname) VALUES ('$follow') ";

if ($conn->query($sql) === TRUE) {
    echo "  <meta http-equiv='refresh' content='0; url=index.php' >";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>