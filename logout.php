<html>
<head><title>Logout  </title>
</head>
<body>
<?php
   include_once"dbConfig.php";
    session_start();
    $uname=$_SESSION['suname'];
    $pswdv=$_SESSION['spswd'];
    echo "welcome ". $uname;?>
<a href="index.php">click here to goto homepage</a> <br>
<?php
  session_unset();
  session_destroy();
  header('location:index.php');
?>
</body>
</html>
