<html>
<head>
</head>
<body>
<?php

include_once"dbConfig.php";
  $a=$_POST["uname"];
  $b=$_POST["pswd"];
  $conn=mysqli_connect($serverName,$userName,$password,$databaseName);
  $sql="select * from registration where username='$a'";
  $result=mysqli_query($conn,$sql);
  $n= mysqli_num_rows($result);
  if($n == 0)
   {
     echo "no user registered with this username";
     echo "please click the following link for registration";
     echo "<a href=".'"register.php"'.">clickhere</a>";
   }
   else
   {
    $row=mysqli_fetch_row($result);
    $s=$row[1];
    if($s != $b)
    {
       echo "incorrect password.please click following link to re-login";
       echo "<a href=".'"login.php"'.">clickhere</a>";
    }
    else
     {
   echo "welcome!" . $row[2];
      session_start();
      $_SESSION['suname']=$a;
      $_SESSION['fname']=$row[2];
      header('location:afterlogin.php');
     }
   }
?>
</body>
</html>
