<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="shortcut icon" href="logo_tbh_bg.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> 
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" href="stylehome.css" type="text/css" >
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark  navgreen blue kanit">
<span><img src="logo_tbh.png" width="30" height="30" alt="">
  <a class="navbar-brand" href="index.php">ThailandBlogHub</a></span>
  <?php
  session_start();
  $username=$_SESSION["registername"];

  
  
  ?>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav litsize">
    <a class="nav-item nav-link " href="science.php">Science <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link " href="it.php">IT</a>
      <a class="nav-item nav-link " href="health.php">Health/Sport</a>
      <a class="nav-item nav-link" href="travel.php">Travel</a>
      <a class="nav-item nav-link " href="business.php">Business</a>
      <a class="nav-item nav-link" href="education.php">Education</a>
      <a class="nav-item nav-link" href="entertainment.php">Entertainment</a>
      <a class="nav-item nav-link" href="homegarden.php">Home/Garden</a>
      <a class="nav-item nav-link" href="reaction.php">Reaction/Review</a>
      <a class="nav-item nav-link" href="reporter.php">Reporter</a>
    </ul>
    
  </div>
  <?php 
  
    echo "<a class='nav-item nav-link white' href='login.php'>เข้าสู่ระบบ</a>";
 
  ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<br>
<div class="container">
<h3 class="kanit"> <i class="fas fa-user-plus"></i> ลงทะเบียนสมาชิก </h3>
<div class="row">
  <div class="col-12 col-md-8">
  <div class="card"><div class="card-body">
  <h5>ใส่ข้อมูลต่างๆ</h5>
  <p> เปลี่ยน Username <a href="register1.php">คลิก</a> </p>

  <form action="register3.php" method="post">
  <label>ใส่ Username ของคุณ</label>
  <input type="text" class="form-control" name="username" value="<?php echo $username ;?>" placeholder="Enter Username" readonly>
  <label>ใส่ชื่อ - นามสกุล หรือ นามปากกา <br>(จะแสดงในหน้าโปรไฟล์ คนละอันกับ Username สามารถใช้ภาษาไทย หรือ ภาษาอื่นๆได้)</label>
  <input type="text" class="form-control" name="nameser" required >
  <label>Email</label>
  <input type="email" class="form-control" name="email" required>
  <label>Password</label>
  <input type="password" class="form-control" name="password" required>
 <?php
 session_destroy();
 ?>
  
  <br>
  <button class="btn btn-primary kanit" type="submit"><i class="fas fa-paper-plane"></i> ลงทะเบียน </button>
  </from>



    
    
  </div></div> <!-- for card and card-body -->

  
  </div> <!-- div for col-12 col-md-8 -->

  <div class="col-6 col-md-4">      <div id="fb-root"></div> <script>(function(d, s, id) {   var js, fjs = d.getElementsByTagName(s)[0];   if (d.getElementById(id)) return;   js = d.createElement(s); js.id = id;   js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12&appId=389712018153235&autoLogAppEvents=1';   fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script><div class="fb-page" data-href="https://www.facebook.com/thailandbloghub/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thailandbloghub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thailandbloghub/">Thailand Blog Hub</a></blockquote></div>
   </div>  <!-- for col-6 col-md-4 -->     </div> <!-- for container --> </div> <!-- div for row -->
</div> <!-- for container div -->
<br><br><br><br><br><br> <div class="footer  navbar-dark bg-dark ">   <div class="container">   <div class="row">     <div class="col">       <div class="footercontent">     <div class="flexdiv">       <img src="logo_tbh_bg.png" class="footerlogo">       <div style="color:white;">     <h6 class="kanit">ไทยแลนด์บล็อกฮับ</h6>     <p>Copyright 2018 Thailand Blog Hub</p>     <a href="condition.php" class="listfooter"> ข้อกำหนดและเงื่อนไข </a><br>     <a href="policy.php" class="listfooter"> นโยบายความเป็นส่วนตัว </a>      </div>      </div><!--for flex div -->      </div>     </div><!--for col div-->            </div><!--for row div-->      </div> <!--for container --> </div><!-- for nav bottom --> </body></html>