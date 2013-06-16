<?php
header('Access-Control-Allow-Origin: *');

$name= $_POST['name'];
$dob= $_POST['dob'];
$sex= $_POST['sex'];
$bgroup=$_POST['bgroup'];
$street=$_POST['street'];
$area=$_POST['area'];
$city=$_POST['city'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
$tel3=$_POST['tel3'];

$bgroup = htmlspecialchars( $_POST['bgroup'] );

echo $bgroup;
$con = mysql_connect('localhost','root',"");
if(!$con)
{
	die('Could not Connect' . mysql_error());
}

mysql_select_db("bloodbank", $con);


/*$mysql_host = "mysql6.000webhost.com";
$mysql_database = "a7638716_jugaad";
$mysql_user = "a7638716_jugaad";
$mysql_password = "jugaad123";
$con = mysql_connect($mysql_host,$mysql_user,$mysql_password );

if(!$con)
{
	die('Could not Connect' . mysql_error());
}

mysql_select_db($mysql_database, $con);*/


$name= $_POST['name'];
$dob= $_POST['dob'];
$sex= $_POST['sex'];
$bgroup=$_POST['bgroup'];
$street=$_POST['street'];
$area=$_POST['area'];
$city=$_POST['city'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
$tel3=$_POST['tel3'];

$sql2= "INSERT INTO donor (name,dob,sex,street,area,city,phone,bgrp) VALUES ('".$name."','".$dob."','".$sex."','".$street."','".$area."','".$city."','".$tel1."','".$bgroup."')";


//echo $sql2;

if(!mysql_query($sql2, $con))
{
	echo "Insert Failed";
	die("");

}


echo 'Success';

?>