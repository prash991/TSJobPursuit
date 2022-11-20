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
$b=$_POST["des"];
$a=1;
$errors=0;


echo "Your problem is:".$b;
echo "<br>";
$conn=mysqli_connect($serverName,$userName,$password,$databaseName);
$sql="insert into comments1 values ('$a','$b')";
$result=mysqli_query($conn,$sql);

	  
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "images/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
	if($result)
{
         echo "Problem posted";
}
      else{

         print_r($errors);

      }
  }
?>
</head>
</html>