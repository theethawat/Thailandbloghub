<?php
 session_start();
 $user=$_SESSION["user"];
 $catagory=$_POST["catagory"];
 $id=$_POST["id"];

 $urlname=array("science","it","health","travel","business","education","entertainment","homegarden","reaction","reporter");
 $tablename=array("00science","00it","00health","00travel","00business","00education","00entertainment","00homegarden","00reaction","00reporter");
 
 for($i=0;$i<10;$i++)
 {
     if($catagory==$tablename[$i])
     {
         $thisfoldername=$urlname[$i];
     }
 }
  move_uploaded_file($_FILES["photo"]["tmp_name"],"$thisfoldername/".$_FILES["photo"]["name"]);
    $filename=$_FILES["photo"]["name"];


 $conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
 $sql="UPDATE $catagory SET Photo='$filename' WHERE id='$id' ";
 
 if ($conn->query($sql) === TRUE) {
    echo "  <meta http-equiv='refresh' content='0; url=profile.php' >";
} else {
    echo "Error updating record: " . $conn->error;
}
?>