<?php
$username=$_POST["username"];
$nameser=$_POST["nameser"];
$email=$_POST["email"];
$password=$_POST["password"];
$conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");

$sql="INSERT INTO member (Usrname,NameandSur,Email,Password) VALUES('$username','$nameser','$email','$password')";
if ($conn->query($sql) === TRUE) {
    $usertablename=$username."_like";
    $sql="CREATE TABLE $usertablename (ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,id_of_like TEXT NOT NULL)";
    if ($conn->query($sql) === TRUE) 
    {
        $usertablename2=$username."_following";
        $sql="CREATE TABLE $usertablename2 (ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,followingname TEXT NOT NULL)";
            if ($conn->query($sql) === TRUE) {
                echo "<meta http-equiv='refresh' content='0; url=login.php' >";
                }
            else
                {
                echo "Error creating table: " . $conn->error;
                }
    } else {
        echo "Error creating table: " . $conn->error;
    }

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>