<html>
<head>
  <link rel="stylesheet" href="css/animate.css">
		<style>
	body {
	

    background-image: url("images/bg1img.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom;

    background-repeat: no-repeat;
    background-size: 1500px 900px;
}
	</style>
<title>Complaint cell</title>
</head>
<body>
<form method="POST" action="r2.php" enctype="multipart/form-data"> 
<center>
<table>
<tr>
  <h1  style="color:red">Select your District</h1>
  <select name="dis" >
    <option value="Transport, Roads and Buildings">Karimnagar</option>
    <option value="Women Development, Child Welfare and Disabled Welfare">Warangal</option>
    <option value="Panchayat Raj and Rural Development">Adilabad</option>
    <option value="Information Technology, Electronics and Communications">Medak</option>
	 <option value="Khammam "></option>
  </select>
<tr>
<td><h2 style="color:red;">Email:</h2></td>
<td><input type="text" name="email"></td><br>
</tr>
<tr>
<td><h2 style="color:red;">Describe your Problem:</h2></td>
<td><textarea rows="10" columns="10" name="des"></textarea></td>
</tr>
 <tr>
 <td>
 <input type="file" name="image" />
 </td>
 <td>
<input type="submit" value="submit">
</td>
</tr>
</table>
</center>
</form>

</body>
</html>
