<html>
<head>
		<style>
	body {
	
  
    background-image: url("images/bg1img.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;

    background-repeat: no-repeat;
    background-size: 1350px 650px;
}<
	</style>
</head>
<body>
<?php
include_once"dbConfig.php";
 $conn=mysqli_connect($serverName,$userName,$password,$databaseName);
 $a=$_POST["abc"];
 $b=$_POST["region"];
 $sql="select * from registration where region='$b'";
 $result=mysqli_query($conn,$sql);
 $c=mysqli_num_rows($result);
 if($c==0)
 {
 echo "No user registered in your locality";
 }
 else
 {
 $sql1="select * from registration where intrestedin='$a'";
 $result1=mysqli_query($conn,$sql1);
 $d=mysqli_num_rows($result1);}
 if($d==0)
 {
 echo "No person available with that specification in your locality";
 }
 else
 {
$sql2="select * from registration where region='$b'";
 $result2=mysqli_query($conn,$sql2);
 ?><table border="1"><tr><td>Fullname</td><td>emailid</td><td>Mobilenumber</td></tr>
<?php while ($row = mysqli_fetch_assoc($result2)) {
   
	echo "<tr><td>" .$row["fullname"]. "</td>";
   echo "<td>" .$row["emailid"]. "</td>";
   echo "<td>" .$row["phone"]. "</td></tr>";
}
  
 
 
 
 $e=mysqli_fetch_array($result2);
 echo "Available students are".$e; }

 ?>
 </html>