<?php
$username =filter_input(INPUT_POST, 'username:')
$password =filter_input(INPUT_POST, 'password:')

$host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="account";

$conn= new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
	die('Connection error('.mysqli_connect_errno().')'
}
  else{
  	$sql="INSERT INTO account (username,password) values ('$username','$password')";
  }

$conn=>close();





?>