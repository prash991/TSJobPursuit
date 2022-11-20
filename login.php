<html>
<head>
   <link rel="stylesheet" href="css/animate.css">
		<style>
	body {
	
  
    background-image: url("images/log.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;

    background-repeat: no-repeat;
      background-size: 1150px 490px;
}
	</style>
<title>login</title>
</head>

<body style="color:maroon;">
<marquee><h1>Student Login</h1></marquee>
<center>
  <h1 class="animated infinite zoomin" style="color:red;font-size:550%;">Please Login</h1>
<h1>Login</h1>

<table>
<form method="POST" action="validate.php">
<tr>
<td><h2>UserName</h2></td>
<td><input type="text" name="uname" required></td>
</tr>
<br>
<tr>
<td><h2>Password</h2></td>
<td><input type="password" name="pswd" required></td>
</tr>
<tr>
<td><input type="submit" value="login"></td>
<td><input type="reset" value="cancel"></td>

</tr>
</form>
</table>
<a href="register.php"><h3 style="color:blue;">not yet registerd click here to register</h3></a>
</center>

</body>
</html>