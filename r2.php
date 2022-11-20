<html>
<head>
		<style>
	body {
	
 
background-color:silver;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom;

    background-repeat: no-repeat;
    background-size: 1500px 900px;
}
	</style>
</head>
<body>

<?php

include_once"dbConfig.php";
$a=$_POST["email"];
$b=$_POST["des"];
$c=$_POST["dis"];


echo "Your District is:".$c;
echo "<br>";
echo "Your Email is:".$a;
echo "<br>";
echo "Your problem is:".$b;



      $errors= array();

      $file_name = $_FILES['image']['name'];

      $file_size =$_FILES['image']['size'];

      $file_tmp =$_FILES['image']['tmp_name'];

      $file_type=$_FILES['image']['type'];

      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      

      $expensions= array("jpeg","jpg","png");

      

      if(in_array($file_ext,$expensions)=== false){

         $errors[]="extension not allowed, please choose a JPEG or PNG file.";

      }

      

      if($file_size > 5097152){

         $errors[]='File size must be excately 2 MB';

      }

      

      if(empty($errors)==true){

         move_uploaded_file($file_tmp,"images/".$file_name);
$conn=mysqli_connect($serverName,$userName,$password,$databaseName);
$sql="insert into comments values ('$a','$b','$file_name')";
$result=mysqli_query($conn,$sql);
if($result)
{
         echo "Problem posted";
}
      }else{

         print_r($errors);

      }

   
echo $file_name;
$s="images/".$file_name;
echo "<img src='".$s."' width='200'>";

?>


</body>
</html>