<html>
<head>
  <link rel="stylesheet" href="css/animate.css">
		<style>
	body {
	
  
    background-image: url("images/bgimg9.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom;

    background-repeat: no-repeat;
    background-size: 1500px 700px;
}
	</style>
<head><title>After login</title>
</head>
<body style="text-align:center;font-size:150%;color:white;">
<?php

include_once"dbConfig.php";
    session_start();
    $uname=$_SESSION['suname'];
    $fname=$_SESSION['fname'];
  
?>
  <h1 class="animated infinite zoomin" style="color:aqua;font-size:550%;"> <?php echo "welcome ". $fname; ?></h1>
  </h1>
<br>
<a href="index.php"><h1 style="text-align:center;color:white;"> click here to goto homepage</h1></a> <br>
<a href="logout.php"><h1 style="text-align:center;color:white;"> logout</h1></a> <br> 

</body>
</html>
    
