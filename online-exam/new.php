<?php
$host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="student";

$conn= new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
	die('Connection error('.mysqli_connect_errno().')'
}
  else{
  	$sql="SELECT * (username,password) values ('$username','$password')";
  }

$conn=>close();
?>



