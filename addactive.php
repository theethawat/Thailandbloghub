<?php
 session_start();
 $user=$_SESSION["user"];
//Recieve Form Answer
$catagory=$_POST["catagory"];
$topic=$_POST["topic"];
$blogtitle=$_POST["blogtitle"];
$link=$_POST["link"];
$describe=$_POST["describe"];
$permiss=$_POST["permission"];

$conn=mysqli_connect("localhost","root","","thailandbloghub");
$tablename=array("00science","00it","00health","00travel","00business","00education","00entertainment","00homegarden","00reaction","00reporter");
$foldername=array("science","it","health","travel","business","education","entertainment","homegarden","reaction","reporter");
for($i=0;$i<10;$i++)
{
    if($catagory==$tablename[$i])
    {   
        $thisfoldername=$foldername[$i];
    }
}
move_uploaded_file($_FILES["photo"]["tmp_name"],"$thisfoldername/".$_FILES["photo"]["name"]);
$filename=$_FILES["photo"]["name"];

//Permission 
if($permiss=='allow')
{
    $thispermiss=1;
}
else{
    $thispermiss=0;
}

$sql="INSERT INTO $catagory (Usrname,Sitename,Topic,Infoadd,link,permiss,photo) VALUES('$user','$blogtitle','$topic','$describe','$link','$thispermiss','$filename')";

if (mysqli_query($conn,$sql)){
    echo "เราได้ทำการเพิ่มข้อความของคุณเรียบร้อยแล้ว" ;
    echo "<meta http-equiv='refresh'content='0; url=".$thisfoldername.".php'>";
}
else{
    echo "ERROR" . mysqli_error($conn);
}

?>