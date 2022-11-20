<html>
<head>
		<style>
	body {
	
  
    background-image: url("images/bg1img.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;

  
    background-size:cover;
}

	</style>
</head>
<body style="color:green;">
<h1 style="color:red;"><b><u><marquee>REGISTRATION FORM</marquee></u></b></h1><hr>

<center>
<form action="registered.php" method="POST">

<table>
<caption>
<h3><ins><strong>REGISTRATION FORM</strong></ins></h3>
</caption>
<pre>

</pre>

<tr>
<td>Username</td>
<td><input type="text" name="uname" required></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="pwd" required></td>
</tr>
<tr>
  <td>Emailid</td>
  <td><input type="text" name="email" required  ></td>
</tr>
<tr>
  <td>FullName</td>
  <td><input type="text" name="fsname" required autocomplete="off" placeholder="enter full name" ></td>
</tr>
<tr>
  <td>Age</td>
  <td><input type="text" name="age"  ></td>
</tr>


<tr>
  <td>phone no.</td>
  <td><input type="text" name="phone" required ></td>
</tr>
<tr>
  <td>gender</td>
  <td><input type="radio" name="gender" value="male" >male
       
       <input type="radio" name="gender" value="female" >female</td>
	   
</tr>
</tr><tr>
<td>Courses</td>

  <td>Degree
      <select name="degree">
      <option value="bsc">bsc</option>
	  <option value="bsc computers">bsc computers</option>
	  <option value="bsc agriculture">bsc agriculture</option>
	  <option value="bsc architecture">bsc architecture</option>
	  <option value="bachelor of arts ">bachlor of arts</option>
	  </select>
       Enginnering
	    <select name="eng">
	  <option value="-1" seleted>select...</option>
      <option value="eee">B.tech eee</option>
	  <option value="cse">B.tech cse</option>
	  <option value="ece">B.tech ece</option>
	  <option value="civil">B.techcivil</option>
	  <option value="mech ">B.tech mech</option>
	  </select>
	   
       
      Pharmacy
	    <select name="Pharmacy">
	  <option value="-1" seleted>select...</option>
      <option value="bpharm">Bpharmacy</option>
	  <option value="pharmd"</option>
	  
	  </select>
       
    Diploma 
	    <select name="diploma">
	  <option value="-1" seleted>select...</option>
      <option value="eee">eee</option>
	  <option value="cse">cse</option>
	  <option value="ece">ece</option>
	  <option value="civil">civil</option>
	  <option value="mech ">mech</option>
	  </select>
     </tr>
	 <tr>
	 <td>year</td>
      <td><select name="year">
	  <option value="-1" ></option>
      <option value="1styr">1st yr</option>
	  <option value="2ndyr">2nd yr</option>
	  <option value="3rdyr">3rd yr</option>
	  <option value="4thyr">4th yr</option>
	  </select></td>

   </td>
</tr>
<tr>
<td>City</td>
<td><select name="region">
  <option value="hyd">Hyderabad</option>
  <option value="knr">Karimnagar</option>
  <option value="wgl">Warangal</option>
  <option value="nzb">Nizamabad</option>
  <option value="rr">Rangareddy</option>
<option value="sr">Sangareddy</option>
<option value="khammam">Khammam</option>
<option value="mdk">Medhak</option>
 <option value="sdpt">Siddepet</option>
 </select></td></tr>
</tr>
	 <tr>
	 <td>Interested in</td>
      <td><select name="ine">
	  <option value="-1" ></option>
      <option value="programming">programming</option>
	  <option value="electronics">Electronics</option>
	  <option value="electrical">Electrical</option>
	  <option value="mechanical">Mechanical</option>
	   <option value="civil">Civil</option>
	  
	  </select></td>

   </td>
</tr>
  <td><input type="submit" name="submit" value="submit"></td>
     
    <td>   <input type="reset" name="reset" value="reset"></td>
</tr>



</table>
</div>
</form>


</body>
</html>

