<?php
session_start();
 $a=$_SESSION['email'];
 

  if(empty($_SESSION['email']))
 { 	
 	header("Location:login.php");

  }
  if(isset($_POST['submit']))
{
	$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname="online_exam";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $q="UPDATE result SET subject = 'c' WHERE username='$a' ";

if ($conn->query($q) === TRUE) {
  header('Location:test.php');
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}
mysqli_close($conn);
}
?>

<html>
<head>
<title>Rules and Regulations</title>
<style>
body{
	color: black;
	border-bottom: solid;
	border-color:blue;
}
h2{
	color:black;
	border-top: solid;
	border-bottom: solid;
	border-color: blue;
	padding: 17px;
	border-width: 5px;
}
h3{
	color:red;
}
button{
	background-color: green;
	color: white;
	padding:20px 25px;
	border:none;
	margin-left: 25px;
	font-size: 20px;
}
button:hover{
	opacity:0.7;
}
img{
	float:right;
	margin-right:100px;
	margin-bottom:50px;
	font-size:40px;
}
</style>
</head>
<body>
<h2 style="font-size: 60px;"><center>Online Examination System</center></h2><img src="test.png" height="340" width="400">
<h3 style="font-size: 40px;margin-left:35px"><U>Rules and Regulations</U></h3>

<p style="font-size: 30px;margin-left:25px">1.  Each test consist of 10 MCQ based questions.<br>
   2.   Every question has only one correct answer.<br>
   3.   4 marks will be awarded for each correct answer.<br>
   4.   1 mark will be deducted for every incorrect answer.<br>
   5.   Maximum time limit to complete test is 15 minutes.<br>
   6.   At the end of test you will get your final result.<p><br>
   	<form method="post">
   		<button type="submit" name="submit">Take Test</button></form>
   	</body>
</html>