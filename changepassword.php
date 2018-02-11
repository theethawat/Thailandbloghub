<?php
session_start();
$user=$_SESSION["user"];
$conn=mysqli_connect("localhost","root","","thailandbloghub");
$oldpass=$_POST["oldpass"];
$newpass=$_POST["newpass"];
$sql="SELECT * FROM member WHERE Usrname='$user' ";
$memo=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($memo);

if($row["Password"]==$oldpass)
{
    $sql="UPDATE member SET Password ='$newpass' WHERE Usrname='$user' ";
    if($conn->query($sql) == TRUE)
    {
    echo "<meta http-equiv='refresh'content='0; url=setting.php'>";
    }
    else
    {
    echo "Error Updating record: " . $conn->error;
    }
}
else{
    echo "<h3>คุณใส่ Password เก่าของคุณไม่ถูกต้อง เรายังแก้รหัสให้คุณไม่ได้ครับ</h3>";
    echo "<a href='setting.php'>กลับไปหน้า Setting</a>";
}

?>