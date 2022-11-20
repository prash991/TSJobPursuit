  <html>
<head>
<style>
	body {
	
  
    background-image: url("images/votes.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom;

    background-repeat: no-repeat;
    background-size: cover;
}</style>
</head>
<center>
<body style="color:aqua;font-size:450%">

<?php

include_once"dbConfig.php";
  $conn=mysqli_connect($serverName,$userName,$password,$databaseName);
  $sql="SELECT * FROM ips WHERE id=(SELECT MAX(id) FROM ips)";

  $result=mysqli_query($conn,$sql);

      $row=mysqli_fetch_row($result);
	    echo "Total No Of Votes:".$row[0];
?>
</body>
</html>
