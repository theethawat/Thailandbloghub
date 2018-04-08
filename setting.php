<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting</title>
    <link rel="shortcut icon" href="logo_tbh_bg.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> 
<link rel="stylesheet" href="stylehome.css" type="text/css" >
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark  navgreen blue kanit">
<span><img src="logo_tbh.png" width="30" height="30" alt="">
  <a class="navbar-brand" href="index.php">ThailandBlogHub</a></span>
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
  
    <div class='dropdown-divider'></div>
  
    <a class='dropdown-item ' href='setting.php'>การตั้งค่า</a>
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
<div class="col-sm-4">
<div class="card">
<?php
 $conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
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
<button class="btn btn-secondary kanit moremargin" data-toggle="modal" data-target="#greetingchange"><i class="fas fa-comments"></i> อัพเดทคำทักทาย</button><br>
<button class="btn btn-secondary kanit moremargin" data-toggle="modal" data-target="#profilepicchange"><i class="fas fa-image"></i> อัพเดทรูปประจำตัว</button>

</div></div><!-- for card and card body -->
</div> <!-- for col-sm -->

<div class="col">
<div class="card"><div class="card-body">
<h4 class="kanit">การตั้งค่า</h4>
<h5 class="kanit">ตั้งค่าชื่อ</h5>
<p>เปลี่ยนชื่อนามสกุล หรือ นามปากกา ที่ใช้ Display ในหน้าโปรไฟล์</p>
<form action="changename.php" method="post">
    <input type="text" class="form-control" name="nameandsur" ><br>
    <button type="submit" class="btn btn-primary kanit">เปลี่ยนชื่อ </button>
</form>
<hr>
<h5 class="kanit">ตั้งค่ารหัสผ่าน</h5>
<p>เปลี่ยนรหัสผ่านที่ใช้ในการเข้าสู่ระบบ โปรดตรวจสอบภาษาในขณะตั้งรหัสผ่านให้ดี</p>
<form action="changepassword.php" method="post">
    <label>ใส่รหัสผ่านเดิมของคุณ</label>
    <input type="password" class="form-control" name="oldpass" >
    <label>ใส่รหัสผ่านใหม่ของคุณ</label>
    <input type="password" class="form-control" name="newpass" >
    <br>
    <button type="submit" class="btn btn-primary kanit">เปลี่ยนรหัสผ่าน </button>
</form>
<hr>
<h5 class="kanit">ตั้งค่า Username </h5>
<p>เขออภัยครับ ทาง ThailandBlogHub ระบบในตอนนี้ยังไม่รองรับการเปลี่ยน Username ครับ</p>
</div></div> <!-- for card and card body div -->
</div> <!-- for col-sm -->

<!--
<div class="col-sm">
</div> --><!-- for col-sm -->

</div> <!-- for row div -->
<div class="addbutton fixed-bottom">  <a href="addnew.php"><button class="btn btn-danger pencil"><i class="fas fa-plus"></i></button></a> </div>
</div> <!-- for container div -->


<!-- for modal -->
<div class="modal fade" id="greetingchange" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">อัพเดทคำทักทาย หรือ คำแนะนำตัว</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>พิมพ์คำแนะนำตัวใหม่ของคุณที่นี่</p>
        <form action="changegreeting.php" method="post">
        <textarea class="form-control" rows="3" name="greeting"></textarea><br>
        <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
        </form>
      </div>
     
        
        
     
    </div>
  </div>
</div>
<!-- end of Modal Zone -->

<!-- for modal -->
<div class="modal fade" id="profilepicchange" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">อัพเดทรูปประจำตัว</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>ใส่รูปภาพของคุณที่นี่</p>
        <form action="changeprofile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profilephoto">
        <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
        </form>
      </div>
     
        
        
     
    </div>
  </div>
</div>
<!-- end of Modal Zone -->


<br><br><br><br><br><br> <div class="footer  navbar-dark bg-dark ">   <div class="container">   <div class="row">     <div class="col">       <div class="footercontent">     <div class="flexdiv">       <img src="logo_tbh_bg.png" class="footerlogo">       <div style="color:white;">     <h6 class="kanit">ไทยแลนด์บล็อกฮับ</h6>     <p>Copyright 2018 Thailand Blog Hub</p>     <a href="condition.php" class="listfooter"> ข้อกำหนดและเงื่อนไข </a><br>     <a href="policy.php" class="listfooter"> นโยบายความเป็นส่วนตัว </a>      </div>      </div><!--for flex div -->      </div>     </div><!--for col div-->            </div><!--for row div-->      </div> <!--for container --> </div><!-- for nav bottom --> </body></html>
</html>