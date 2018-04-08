<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
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
<span>
<img src="logo_tbh.png" width="30" height="30" alt="">
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
  </nav>
  <div class="container">
  <form action="admin.php" method="post" style="display:flex;">
    <div class="searchform">
    <label>ใส่ชื่อ Table Name เช่น 00Science</label>
    <input class="form-control" type="text" name="tablename">
    </div>
    <div class="searchform">
    <label>ใส่ชื่อ Folder Name เช่น Science</label>
    <input class="form-control" type="text" name="foldername">
    </div>
    <div class="searchform">
    <button type="submit" class="btn btn-primary kanit">ค้นหา</button>
    </div>
  </div>
  <?php

  if ($user=='admin'&& $_POST!=NULL)
  {
      $tablename=$_POST["tablename"];
      $foldername=$_POST["foldername"];
    print "<table class='table table-hover'>";
    print "<thead>
     <tr>
     <th scope='col'>Topic</th>
     <th scope='col'>Describe</th>
     <th scope='col'>Auther</th>
     <th scope='col'>Picture</th> 
     <th scope='col'>Permission</th>
     <th scope='col'>Link</th>
     </tr>
    </thead>
    ";
    print "<tbody>";
    $conn=mysqli_connect("localhost","puyscexc","Tttt2544","puyscexc_thailandbloghub");
    $sql="SELECT * FROM $tablename ORDER BY ID DESC";
    $memo=mysqli_query($conn,$sql);
    if($memo!=NULL)
    {
        while($row=mysqli_fetch_assoc($memo))
        {
            print "<tr>";
            print "
            <td scope='col'>".$row["Topic"]."</th>
            <td scope='col'>".$row["Infoadd"]."</th>
            <td scope='col'>".$row["Usrname"]."</th>
            <td scope='col'><img style='width:100px;' src='".$foldername."/".$row["photo"]."'></th> 
            <td scope='col'>".$row["permiss"]."</th>
            <td scope='col'>".$row["link"]."</th>
            ";
            print "</tr>";
        }

    }
    
    print "</tbody>";
    print "</table>";
  }
  else{
      echo "You don't have this permission. Or Type the Correct Value";
  }
  ?>
    


 

</body>
</html>