<?php
$catagory=$_POST["catagory"];
$id=$_POST["id"];
$conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
$sql="DELETE FROM $catagory WHERE ID='$id'";
if ($conn->query($sql) === TRUE) {
    echo "  <meta http-equiv='refresh' content='0; url=profile.php' >";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>