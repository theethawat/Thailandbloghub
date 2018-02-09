<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="shortcut icon" href="logo_tbh_bg.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> 
<link rel="stylesheet" href="stylehome.css" type="text/css" >
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark  navgreen blue kanit">
<img src="logo_tbh.png" width="30" height="30" alt="">
  <a class="navbar-brand" href="index.php">ThailandBlogHub</a>
  <?php
  session_start();
  
  ?>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav litsize">
    <a class="nav-item nav-link " href="science.php">Science <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="it.php">IT</a>
      <a class="nav-item nav-link" href="health.php">Health</a>
      <a class="nav-item nav-link" href="travel.php">Travel</a>
      <a class="nav-item nav-link" href="business.php">Business</a>
      <a class="nav-item nav-link" href="education.php">Education</a>
      <a class="nav-item nav-link" href="entertainment.php">Entertainment</a>
      <a class="nav-item nav-link" href="homegarden.php">Home/Garden</a>
      <a class="nav-item nav-link" href="reaction.php">Reaction/Review</a>
      <a class="nav-item nav-link" href="reporter.php">Reporter</a>
    </ul>
    
  </div>
  <?php 
  if ($_SESSION==NULL)
  {
    echo "<a class='nav-item nav-link white'href='login.php'>เข้าสู่ระบบ</a>";
  }
  else
  { 
      $user=$_SESSION["user"];
      echo"<span class='nav-item dropdown' >";
      //echo  " <a class='nav-item nav-link white'style='color:white;'>สวัสดี".$user."</a>";
      echo   "<a class='nav-link dropdown-toggle usrnameshow' style='color:white;' role='button' id='navbarDropdown'  data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> สวัสดี".$user."</a> 
      
      <div class='dropdown-menu widescreennav'aria-labelledby='navbarDropdown' >
    <a class='dropdown-item ' href='profile.php'>โปรไฟล์ของคุณ</a>
    <a class='dropdown-item ' href='#'>แก้ไข/ลบโพสต์</a>
    <div class='dropdown-divider'></div>
    <a class='dropdown-item ' href='#'>ช่วยเหลือ</a>
    <a class='dropdown-item ' href='#'>การตั้งค่า</a>
    <a class='dropdown-item ' href='logout.php'>ลงชื่อออก</a>
  </div>";
  echo "</span>";
  }
  ?>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<br>
<div class="container">
<div class="row">
<div class="col-sm">
<div class="card">
<?php
 $conn = mysqli_connect("localhost","root","","thailandbloghub");
 $sql="SELECT * FROM member WHERE Usrname = '$user' ";
$memo = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($memo);

if($row["Profilepic"]==NULL)
{
    print "<img class='card-img-top esp' src='wall_all.png' alt='Card image cap'>";
}
else
{
    print "<img class='card-img-top esp' src='Profile/".$row["Profilepic"]."' alt='Card image cap'>";
}
?>

<div class="card-body">
<?php
    print "<h5 class='kanit'>".$row["Usrname"]."</h5>";
    print "<h6 class='kanit'>".$row["NameandSur"]."</h6>";
    if($row["Greeting"]==NULL)
    {
        print "<p>คุณยังไม่มีคำแนะนำตัวเลย</p>";
    }
    else
    {
        print "<p>".$row["Greeting"]."</p>";
    }
?>



</div></div><!-- for card and card body -->
</div> <!-- for col-sm -->

<div class="col-sm">
</div> <!-- for col-sm -->

<div class="col-sm">
</div> <!-- for col-sm -->

</div> <!-- for row div -->
</div> <!-- for container div -->
</body>
</html>