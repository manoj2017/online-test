<?php
$host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="student";


 $link= mysqli_connect("localhost","root","","student");
$conn= new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
	die('Connection error('.mysqli_connect_errno().')');
}
  	 
$result = mysqli_query($link,"UPDATE student.system SET status=0");
$conn->close();
?>