<?php
 session_start();
 $user=$_SESSION["user"];
 $catagory=$_POST["catagory"];
 $id=$_POST["id"];
 $link=$_POST["link"];


 $conn=mysqli_connect("localhost","root","","thailandbloghub");
 $sql="UPDATE $catagory SET Link='$link' WHERE id='$id' ";
 
 if ($conn->query($sql) === TRUE) {
    echo "  <meta http-equiv='refresh' content='0; url=profile.php' >";
} else {
    echo "Error updating record: " . $conn->error;
}
?>