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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-104473772-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-104473772-2');
</script>

</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark  navgreen blue kanit">
<span><img src="logo_tbh.png" width="30" height="30" alt="">
  <a class="navbar-brand" href="index.php">ThailandBlogHub</a></span>
  <?php
  
  session_start();
    session_destroy();
    session_start();
  
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
  <h5>ตรวจสอบชื่อ Username </h5>
  <p>เนื่องจากเรากำหนดให่้ Username จะต้องไม่ซ้ำกับใคร ก่อนจะสมัครมาตรวจสอบกันก่อนว่า Username ของท่านใช้ได้หรือไม่ Username จะเป็นชื่อที่โชว์อยู่ในโพสต์ของคุณ
  <br> Username เป็นภาษาอังกฤษ<b>พิมพ์เล็ก</b> เท่านั้น(สามารถเป็นตัวเลขและอักขระอื่นๆได้) </p>
  <form action="register1.php" method="post">
  <input type="text" class="form-control" pattern="[a-z0-9._%+-]{1,}" title="โปรดใส่ตัวอักษรภาษาอังกฤษพิมพ์เล็กหรือเลข สัญลักษณ์อนุญาติเฉพาะ . _ % + -"name="usernamecheck" placeholder="Enter Username"><br>
  <button class="btn btn-primary kanit" type="submit"><i class="fas fa-search"></i> Search </button>
  </from>

<?php

if($_POST!=NULL)
{
    $username=$_POST["usernamecheck"];
    $conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
    $sql="SELECT Usrname FROM member";
    $memo=mysqli_query($conn,$sql);
    $check=0;
    while($row=mysqli_fetch_assoc($memo))
    {
        if($username==$row["Usrname"])
        {
            echo "<b>".$username."</b> Username นี้มีคนใช้อยู่แล้ว จงพิมพ์ใหม่";
            $check=1;
            break;
        }
    }
    if($check==0)
    {
        echo "<b>".$username."</b> Username นี้สามารถใช้งานได้";
        $_SESSION["registername"]=$username;
        echo "  <meta http-equiv='refresh' content='0; url=register2.php' >";
    }
     
}


?>

    
    
  </div></div> <!-- for card and card-body -->

  
  </div> <!-- div for col-12 col-md-8 -->

  <div class="col-6 col-md-4">      <div id="fb-root"></div> <script>(function(d, s, id) {   var js, fjs = d.getElementsByTagName(s)[0];   if (d.getElementById(id)) return;   js = d.createElement(s); js.id = id;   js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12&appId=389712018153235&autoLogAppEvents=1';   fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script><div class="fb-page" data-href="https://www.facebook.com/thailandbloghub/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thailandbloghub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thailandbloghub/">Thailand Blog Hub</a></blockquote></div>
   </div>  <!-- for col-6 col-md-4 -->     </div> <!-- for container --> </div> <!-- div for row -->
</div> <!-- for container div -->

<br><br><br><br><br><br> <div class="footer  navbar-dark bg-dark ">   <div class="container">   <div class="row">     <div class="col">       <div class="footercontent">     <div class="flexdiv">       <img src="logo_tbh_bg.png" class="footerlogo">       <div style="color:white;">     <h6 class="kanit">ไทยแลนด์บล็อกฮับ</h6>     <p>Copyright 2018 Thailand Blog Hub</p>     <a href="condition.php" class="listfooter"> ข้อกำหนดและเงื่อนไข </a><br>     <a href="policy.php" class="listfooter"> นโยบายความเป็นส่วนตัว </a>      </div>      </div><!--for flex div -->      </div>     </div><!--for col div-->            </div><!--for row div-->      </div> <!--for container --> </div><!-- for nav bottom --> </body></html>