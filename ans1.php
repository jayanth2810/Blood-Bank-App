<?php
header('Access-Control-Allow-Origin: *');

$name= $_POST['name'];
//echo $name;
$bgroup=$_POST['bgroup'];
$tel1=$_POST['tel1'];
//echo $tel1;
$bgroup = htmlspecialchars( $_POST['bgroup'] );
$con = mysql_connect('localhost','root',"");
if(!$con)
{
	die('Could not Connect' . mysql_error());
}

mysql_select_db("bloodbank", $con);
$name= $_POST['name'];
$bgroup=$_POST['bgroup'];
$tel1=$_POST['tel1'];

$sql2= "SELECT area from donor where bgrp = '".$bgroup."' ";




//echo $sql2;

$result=mysql_query($sql2, $con);
/*$row=mysql_fetch_assoc($result);
echo $row['area'];
*/
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))
  {
  echo $row['area'];
  echo "<br/>";
  }


//echo 'Success';

?>