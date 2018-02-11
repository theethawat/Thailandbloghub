<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information Technology</title>
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
      <a class="nav-item nav-link active" href="it.php">IT</a>
      <a class="nav-item nav-link" href="health.php">Health/Sport</a>
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
    echo "<a class='nav-item nav-link white' href='login.php'>เข้าสู่ระบบ</a>";
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
<h3 class="kanit">Information Technology</h3>
<div class="row">
  <div class="col">
  <!-- PHP Code zone -->
  <?php
    if($_SESSION!=NULL)   {       $usertablename=$user."_Like";   }
  
  $conn=mysqli_connect("localhost","root","","thailandbloghub");
  $sql="SELECT * FROM 00it ORDER BY ID DESC ";
  $memo=mysqli_query($conn,$sql);
  $numrow=mysqli_num_rows($memo);
  //echo $numrow;
  $numrowbyten=($numrow/10)+1;
  //echo $numrowbyten;
  $ini=0;
  $fin=10;
  $idofset=1;
  while($numrowbyten>=1)
  {
      print "<div id=$idofset  class='allcard'>";
      for($i=$ini;$i<$fin;$i++)
      {
         $row = mysqli_fetch_assoc($memo);
         if($row!=NULL)
         {
             //Making Card and Operate it to show
            print "<div class='card maincard'><div class='card-body' >";
            print "<div class='blogcontent'>";
            if($row["photo"]==NULL)
            {
                //specific part
                print "<div class='photodiv'>";
                print "<img class='card-img-top' src='wall_all.png'>";
                print "</div>";
            }
            else
            {
                //regular part
                print "<div class='photodiv'>";
                print "<img class='card-img-top' src='it/".$row["photo"]."'>";
                print "</div>";
            }
            print "<div class='bloginfo'>";
            $authername=$row["Usrname"];
            print "<form class='kanit' action='memberwatch.php' method='post'><button type='submit' name='auther' value='$authername'class='btn btn-light aubut'><i class='fas fa-user'></i> ".$authername."</button> / ".$row["Sitename"]."</form>";
                    print "<h4 class='kanit'>".$row["Topic"]."</h4>";
            print "<p>".$row["Infoadd"]."</p>";
            print "<div class='buttonunder kanit'>";
             $like=$row["likeno"];
            $idoflist=$row["ID"];
            print "<a href='".$row["link"]."'><button class='btn btn-info'><i class='fas fa-paper-plane'></i> ดูบล็อก</button></a>";
            //if control coming soon
            if($_SESSION!=NULL)
            {
            $idwithprefix="IT".$row["ID"];
            $sql="SELECT * FROM $usertablename WHERE id_of_like = '$idwithprefix'";
            $recievedata=mysqli_query($conn,$sql);
            $recievedatarow = mysqli_fetch_assoc($recievedata);
           
            if($recievedatarow==NULL)
            {   
                print "<form style='text-align:center;'action='like.php' method='post'><input hidden name='catagory'value='00it'><button type='submit' class='btn btn-warning' name='idoflike' value='$idoflist'><i class='fas fa-heart'></i> Like ".$like."</button></form>";
            }
            if($recievedatarow!=NULL)
            {
                print "<button type='submit' class='btn btn-warning '><i class='fas fa-check'></i> Like ".$like."</button>";
            }

            }
            if($_SESSION==NULL)
            {
                print "<button type='submit' class='btn btn-warning '><i class='fas fa-heart'></i> Like ".$like."</button>";
            }
            
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";
            print "</div>";
         }
      }
      print"</div>";
      $ini=$ini+10;
      $fin=$fin+10;
      $numrowbyten=$numrowbyten-1;
      $idofset=$idofset+1;
  }
    
    
  ?>
  
  
  
  
  </div><!-- div for col-12 col-md-8 --><!--

  <div class="col-6 col-md-4">      <div id="fb-root"></div> <script>(function(d, s, id) {   var js, fjs = d.getElementsByTagName(s)[0];   if (d.getElementById(id)) return;   js = d.createElement(s); js.id = id;   js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12&appId=389712018153235&autoLogAppEvents=1';   fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script><div class="fb-page" data-href="https://www.facebook.com/thailandbloghub/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thailandbloghub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thailandbloghub/">Thailand Blog Hub</a></blockquote></div>
    </div> --> <!-- for col-6 col-md-4 -->
    </div> <!-- for container -->
</div> <!-- div for row -->
<div class="addbutton fixed-bottom">  <a href="addnew.php"><button class="btn btn-danger pencil"><i class="fas fa-plus"></i></button></a> </div> </div> <!-- for container div -->
</body>
</html>