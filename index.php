<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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
  
    <div class='dropdown-divider'></div>
    <a class='dropdown-item ' href='#'>ช่วยเหลือ</a>
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
<div class="col">
<div class="card"><div class="card-body">
<h4 class="kanit">On Trending</h4>
<?php
$conn=mysqli_connect("localhost","root","","thailandbloghub");
$tablename=array("00science","00it","00health","00travel","00business","00education","00entertainment","00homegarden","00reaction","00reporter");
$urlname=array("science","it","health","travel","business","education","entertainment","homegarden","reaction","reporter");
for($i=0;$i<10;$i++)
{
  $thistable=$tablename[$i];
  $thisurl=$urlname[$i];
  $sql="SELECT * FROM $thistable ORDER BY likeno DESC";
  $memo=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($memo);
  if($row!=NULL)
  {
    print "<div class='flexdiv'>";
    if($row["photo"]==NULL)
    {
      print "<img class='indexissue' src='wall_all.png'>";
    }
    if($row["photo"]!=NULL)
    {
      print "<img class='indexissue' src='".$thisurl."/".$row["photo"]."'>";
    }
    print "<div><a href='".$row["link"]."'><h6 class='kanit'>".$row["Topic"]."</a> ใน <a href='".$thisurl.".php'>  ".$thisurl."</a> <i class='fas fa-heart'></i> ".$row["likeno"]."</h6>";
    print "<p>".$row["Infoadd"]."</p>"; 
    print "</div></div>";
    print "<hr>";
  }
 
}
print "<p>กดถูกใจให้กับบทความที่คุณชอบในหน้า Catagory เพื่อให้บทความที่มียอดไลค์สูงสุดในแต่ละหมวดมาขึ้นที่ On Trending </p>" ;

?>
</div></div> <!--for card and card-body -->
</div> <!-- for col div -->
<div class="col-sm-4">
  <div class="card"><div class="card-body">
<?php
if($_SESSION==NULL)
{
  print "<h5 class='kanit'>เข้าสู่ระบบ</h5>";
  print "<form action='activelogin.php' method='post'>
  <label>Email Address</label>
<input class='form-control' type='email' name='email' placeholder='ใส่อีเมลแอดเดรส' required>
<br>
<label>Password</label>
<input class='form-control'  type='password' name='password' placeholder='ใส่รหัสผ่าน' required>
<br>
<button type='submit' class='btn btn-primary'>เข้าสู่ระบบ</button>

</form>";
print "<br>ยังไม่มีบัญชีใช่มั้ย <a href='register1.php'>ลงทะเบียน</a>";
}
else{
  $sql="SELECT * FROM member WHERE Usrname='$user'ORDER BY ID DESC";
  $memo2=mysqli_query($conn,$sql);
  $row2=mysqli_fetch_assoc($memo2);
  print "<div class='flexdiv'>";
  if($row2["Profilepic"]==NULL)
  {
    print "<img class='indexissue' src='wall_all.png'>";
  }
  else
  {
    print "<img class='indexissue' src='Profile/".$row2["Profilepic"]."'>";
  }
  
  print "<div>";
  print "<h5>".$row2["Usrname"]."</h5>";
  print "<a href='profile.php' class='kanit'>แก้ไขข้อมูลส่วนตัว</a></div>";
  print "</div>";
  print "<hr>";
  for($j=0;$j<10;$j++)
  {
    $thistable2=$tablename[$j];
    $sql="SELECT * FROM $thistable2 WHERE Usrname='$user'";
    $memo3=mysqli_query($conn,$sql);
    $row3=mysqli_fetch_assoc($memo3);
    if($row3!=NULL)
    {
      print "<h6 class='kanit'><b>".$row3["Topic"]."</b> ใน ".$urlname[$j]."<i class='fas fa-heart'></i> ".$row3["likeno"]."  </h6>";
      print "<hr>";
    }
    
  }
  print "<a href='profile.php'>ดูโพสต์อื่นๆ ที่คุณเขียนไป</a>";
  print"<br>";
  print "<p> <b>On Following </b>";
  $followtablename=$user."_following";
  $sql="SELECT * FROM $followtablename ORDER BY ID DESC";
  $memo4=mysqli_query($conn,$sql);
  $count=0;
  for ($k=0;$k<5;$k++)
  {
    $row4=mysqli_fetch_assoc($memo4);
    if($row4!=NULL)
    {
      echo $row4["followingname"]." ";
      $count=1;
    }
  }
  if($count==0)
  {
   echo "คุณยังไม่ได้ติดตามใครเลย";
  }
  if($count==1)
  {
    echo "...";
  }
  print "</p>";
}

?>

</div></div> <!--for card and card body div -->
</div><!--for col sm4 -->
</div> <!-- for row div -->
<br>
<div class="row">
  <div class="col">
    <div class="card"><div class="card-body">
      <h4 class="kanit"> On Following </h4>
      <?php
      if($_SESSION==NULL)
      {
        print "กรุณาลงชื่อเข้าใช้เพื่อใช้งานส่วนนี้";
      }
      else
      {
        while($row5=mysqli_fetch_assoc($memo4))
        {
          $auther=$row5["followingname"];
          for($l=0;$l<10;$l++)
          {
            $thistable3=$tablename[$l];
            $thisurl2=$urlname[$l];
            $sql="SELECT * FROM $thistable3 WHERE Usrname='$auther'ORDER BY ID DESC";
            $memo5=mysqli_query($conn,$sql);
            $row6=mysqli_fetch_assoc($memo5);
            if($row6!=NULL)
            {
              print "<div class='flexdiv'>";
              if($row6["photo"]==NULL)
              {
                print "<img class='indexissue' src='wall_all.png'>";
              }
              if($row6["photo"]!=NULL)
              {
                print "<img class='indexissue' src='".$thisurl2."/".$row6["photo"]."'>";
              }
             print "<div><a href='".$row6["link"]."'><h6 class='kanit'>".$row6["Topic"]."</a> ใน <a href='".$thisurl2.".php'>  ".$thisurl2."</a> <i class='fas fa-heart'></i> ".$row6["likeno"]."</h6>";
            print "<p>".$row["Infoadd"]."</p>"; 
            print "</div></div>";
            print "<hr>";
            }
          }
        }
      }
      ?>
</div></div> <!-- for card and card body -->
</div> <!-- for col -->
<div class="col-sm-4">
  <!--<div class="card"><div class="card-body">-->
<h4>ติดตามเราบนเฟสบุ๊ค</h4>
     <div id="fb-root"></div> <script>(function(d, s, id) {   var js, fjs = d.getElementsByTagName(s)[0];   if (d.getElementById(id)) return;   js = d.createElement(s); js.id = id;   js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12&appId=389712018153235&autoLogAppEvents=1';   fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script><div class="fb-page" data-href="https://www.facebook.com/thailandbloghub/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thailandbloghub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thailandbloghub/">Thailand Blog Hub</a></blockquote></div>
   <!-- </div></div>--> <!--for card and card body-->
</div> <!-- for col sm-4 -->
</div><!--for row class 2 -->

</div> <!--for container div -->
<div class="addbutton fixed-bottom">  <a href="addnew.php"><button class="btn btn-danger pencil"><i class="fas fa-plus"></i></button></a> </div> 
<div class="footer fixed-bottom  navbar-dark bg-dark ">
  <div class="row">
    <div class="col"></div><!--for col div-->
     </div><!--for row div-->
</div><!-- for nav bottom -->
</body>
</html>