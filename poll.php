<html>
<head>
<title>PHP Poll</title>
   <link rel="stylesheet" href="css/animate.css">
		<style>
	body {
	
  
    background-image: url("images/bg1img.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom;

    background-repeat: no-repeat;
    background-size: 1500px 700px;
}
	#a{
	position:absolute;
	top:450px;
	left:300px;}
	#ab{
	position:absolute;
	top:550px;
	left:300px;
}</style>
	
<meta name="description" content="PHP Poll">
<meta name="keywords" content="PHP Poll,PHP Poll,php,poll,mysql,dhtml,DHTML">
</head>

<body>

<?php

include_once"dbConfig.php";

$sql = "CREATE TABLE IF NOT EXISTS poll (
id int(4) NOT NULL default '1',
numA int(4) NOT NULL default '0',
numB int(4) NOT NULL default '0',
numC int(4) NOT NULL default '0',
numD int(4) NOT NULL default '0',
numE int(4) NOT NULL default '0',
numF int(4) NOT NULL default '0',
numG int(4) NOT NULL default '0',
numH int(4) NOT NULL default '0',
numI int(4) NOT NULL default '0',
numJ int(4) NOT NULL default '0',
PRIMARY KEY (id)
)";

mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS ips (
id int(11) NOT NULL auto_increment,
ip varchar(15) NOT NULL,
PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=1";

mysql_query($sql);

$countrecords = mysql_result(mysql_query('SELECT COUNT(*) FROM poll'), 0);

if(!$countrecords){mysql_query("INSERT INTO poll (id, numA, numB, numC,numD,numE,numF,numG,numH,numI,numJ)
VALUES('1','0','0','0','0','0','0','0','0','0','0')") or die(mysql_error());}

$res = mysql_query("SELECT * FROM poll") or die(mysql_error());
while ($row = mysql_fetch_array($res)){
$numA = $row['numA'];
$numB = $row['numB'];
$numC = $row['numC'];
$numD = $row['numD'];
$numE = $row['numE'];
$numF = $row['numF'];
$numG = $row['numG'];
$numH = $row['numH'];
$numI = $row['numI'];
$numJ = $row['numJ'];}

mysql_close();

?>
 
<h1 style="text-align:center;font-size:250%;color:green;">Student Opinion Poll</h1><hr>
<br>
<div id="a">
 <h1 class="animated infinite flipInX " style="color:red;font-size:350%;">Your Opinion Matters</h1>
</div>
<div style='position:absolute;top:53px;left:320px;width:600px;'>
<div id="ab">
<script language="javascript">

var numA = <?php echo $numA; ?>;
var numB = <?php echo $numB; ?>;
var numC = <?php echo $numC; ?>;
var numD = <?php echo $numD; ?>;
var numE = <?php echo $numE; ?>;
var numF = <?php echo $numF; ?>;
var numG = <?php echo $numG; ?>;
var numH = <?php echo $numH; ?>;
var numI = <?php echo $numI; ?>;
var numJ = <?php echo $numJ; ?>;

var total = numA + numB + numC + numD + numE + numF +numG +numH + numI +numJ;
if(numA>0){var percentnumA = ((numA * 100) / total);
percentnumA = Math.round(percentnumA);var widthnumA = percentnumA * 2;}else{var widthnumA=1; var percentnumA=0;}
if(numB>0){var percentnumB = ((numB * 100) / total);
percentnumB = Math.round(percentnumB);var widthnumB = percentnumB * 2;}else{var widthnumB=1; var percentnumB=0;}
if(numC>0){var percentnumC = ((numC * 100) / total);
percentnumC = Math.round(percentnumC);var widthnumC = percentnumC * 2;}else{var widthnumC=1; var percentnumC=0;}
if(numD>0){var percentnumC = ((numD * 100) / total);
percentnumD = Math.round(percentnumD);var widthnumD = percentnumD * 2;}else{var widthnumD=1; var percentnumD=0;}
if(numE>0){var percentnumC = ((numE * 100) / total);
percentnumE = Math.round(percentnumE);var widthnumE = percentnumE * 2;}else{var widthnumE=1; var percentnumE=0;}
if(numF>0){var percentnumC = ((numF * 100) / total);
percentnumF = Math.round(percentnumF);var widthnumF = percentnumF * 2;}else{var widthnumF=1; var percentnumF=0;}
if(numG>0){var percentnumC = ((numG * 100) / total);
percentnumG = Math.round(percentnumG);var widthnumG = percentnumG * 2;}else{var widthnumG=1; var percentnumG=0;}
if(numH>0){var percentnumC = ((numH * 100) / total);
percentnumH = Math.round(percentnumH);var widthnumH = percentnumH * 2;}else{var widthnumH=1; var percentnumH=0;}
if(numI>0){var percentnumC = ((numI * 100) / total);
percentnumI = Math.round(percentnumI);var widthnumI = percentnumI * 2;}else{var widthnumI=1; var percentnumI=0;}
if(numJ>0){var percentnumC = ((numJ * 100) / total);
percentnumJ = Math.round(percentnumJ);var widthnumJ = percentnumJ * 2;}else{var widthnumJ=1; var percentnumJ=0;}
if(total>0){document.write("<div style='position:absolute;top:253px;left:0px;width:300px;height:150px;border:1px solid blue'><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumA+" HEIGHT=20 BORDER=0><b> "+percentnumA+"</b>% <b>Knowledge of core subject</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumB+" HEIGHT=20 BORDER=0><b> "+percentnumB+"</b>% <b>Application of Knowledge</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumC+" HEIGHT=20 BORDER=0><b> "+percentnumC+"</b>% <b>Information Literacy</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumD+" HEIGHT=20 BORDER=0><b> "+percentnumD+"</b>% <b> Analytical and creative Thinking</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumE+" HEIGHT=20 BORDER=0><b> "+percentnumE+"</b>% <b>Multidisciplinary Exposure</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumF+" HEIGHT=20 BORDER=0><b> "+percentnumF+"</b>% <b>Acqaitance with computer and IT</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumG+" HEIGHT=20 BORDER=0><b> "+percentnumG+"</b>% <b>Familarity With Industry Standards</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumH+" HEIGHT=20 BORDER=0><b> "+percentnumH+"</b>% <b>Communication Skiils</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumI+" HEIGHT=20 BORDER=0><b> "+percentnumI+"</b>% <b>Apptitude and Reasoning</b><BR><BR>");
document.write("<IMG SRC='images/blue.png' width="+widthnumJ+" HEIGHT=20 BORDER=0><b> "+percentnumJ+"</b>% <b>Passion For Learning</b><BR><BR>");
document.write("</div>");}else{alert("No votes yet.");}

</script></div>
<br>
<FORM NAME ="form" METHOD ="GET" ACTION ="polldb.php"><BR>
<h2 style="color:blue;">Which Skills you want to Develop?</h2>
<P>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceA' unchecked> <b>Knowledge of core subject</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceB' unchecked><b> Application of Knowledge</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceC' unchecked><b> Information Literacy</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceD' unchecked><b> Analytical and creative Thinking</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceE' unchecked><b> Multidisciplinary Exposure</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceF' unchecked><b> Acqaitance with computer and IT</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceG' unchecked><b> Familarity With Industry Standards</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceH' unchecked><b> Communication Skiils</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceI' unchecked><b> Apptitude and Reasoning</b><BR>
<INPUT TYPE = 'Radio' Name ='answer' value= 'choiceJ' unchecked> <b>Passion For Learning</b><BR><BR>
<INPUT TYPE = "Submit" Name = "Submit" VALUE = "Vote">
</p>


<a href="results.php">Total votes</a>

</FORM>
</div>
</body>
</html>