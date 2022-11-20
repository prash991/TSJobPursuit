<?php

include_once"dbConfig.php";
  $sql="select * from ips";
$answer=$_GET['answer'];
echo "hi";
if($answer<>"choiceA" && $answer<>"choiceB" && $answer<>"choiceC"){$answer="";echo '<script language="javascript">alert("Please vote."); window.location="poll.php";</script>';
}else{

$poll_ip = $_SERVER['REMOTE_ADDR'];

$checkips = mysql_query("SELECT * FROM ips WHERE ip = '$poll_ip'");
if(mysql_num_rows($checkips) != 0){$answer="";echo '<script language="javascript">alert("One vote only, please.");window.location="poll.php";</script>';
}else{
$add_ip = mysql_query("INSERT INTO ips (id, ip)
VALUES('','$poll_ip')") or die(mysql_error());
echo '<script language="javascript">alert("Thanks for voting.");</script>';}

$res = mysql_query("SELECT * FROM poll") or die(mysql_error());
while ($row = mysql_fetch_array($res)){
$numA = $row['numA'];
$numB = $row['numB'];
$numC = $row['numC'];}

if($answer=="choiceA"){$numA=$numA+1;}
if($answer=="choiceB"){$numB=$numB+1;}
if($answer=="choiceC"){$numC=$numC+1;}
echo "Total No Of Votes=".$row[0];

mysql_query("UPDATE poll SET numA = '$numA', numB = '$numB', numC = '$numC'");

mysql_close();

echo '<script language="javascript">window.location="poll.php";</script>';}

?>