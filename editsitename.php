<?php
 session_start();
 $user=$_SESSION["user"];
 $catagory=$_POST["catagory"];
 $id=$_POST["id"];
 $blogtitle=$_POST["blogtitle"];


 $conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
 $sql="UPDATE $catagory SET Sitename='$blogtitle' WHERE id='$id' ";
 
 if ($conn->query($sql) === TRUE) {
    echo "  <meta http-equiv='refresh' content='0; url=profile.php' >";
} else {
    echo "Error updating record: " . $conn->error;
}
?>