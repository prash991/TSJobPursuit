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
$a=$_POST["uname"];
$p=$_POST["pwd"];
$b=$_POST["fsname"];
$c=$_POST["email"];
$d=$_POST["age"];
$e=$_POST["phone"];
$f=$_POST["eng"];
$g=$_POST["year"];
$h=$_POST["region"];
$i=$_POST["ine"];

echo $a."Username";
echo "<br>";

echo "Full Name".$b;
echo "<br>";
echo "Email.id".$c ;
echo "<br>";
echo "PhoneNumber".$d;
echo "<br>";
  


$sql="insert into registration values('$a','$p','$b','$c','$d','$e','$f','$g','$h','$i')";
if(mysqli_query($conn,$sql))
    echo "registered sucessfully";
else
   echo "not registered";

mysqli_close($conn);
?>
