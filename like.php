<?php
session_start();
$user=$_SESSION["user"];
$likeid=$_POST["idoflike"];
$catagory=$_POST["catagory"];
$conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");


$sql="SELECT * FROM $catagory WHERE ID='$likeid' ";
$memo=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($memo);
$newlike=$row["likeno"]+1;

$tablename=array("00science","00it","00health","00travel","00business","00education","00entertainment","00homegarden","00reaction","00reporter");
$urlname=array("science","it","health","travel","business","education","entertainment","homegarden","reaction","reporter");
$blogfront=array("SC","IT","HL","TR","BU","ED","EN","HO","RA","RE");
for($i=0;$i<10;$i++)
{
    if($catagory==$tablename[$i])
    {   
        $blogid=$blogfront[$i].$likeid;
        //echo $blogid;
        $thisurlname=$urlname[$i];
    }
}

$sql="UPDATE $catagory SET likeno = '$newlike' WHERE ID=$likeid ";
// It should be change

  if($_SESSION!=NULL)   {       $usertablename=$user."_like";   }

if (mysqli_query($conn, $sql)) {
    $sql="INSERT INTO $usertablename (id_of_like) VALUES ('$blogid')";
    if ($conn->query($sql) === TRUE) {
        echo "  <meta http-equiv='refresh' content='0; url=".$thisurlname.".php' >";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

?>