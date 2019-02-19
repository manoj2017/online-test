<?php
session_start();
 $_SESSION['email'];
 
   if(empty($_SESSION['email']))
   {
   	header("Location:login.php");
   }
?>
<html>
<head>
	<title>Choose Subject</title>
	<style>
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
img{
   margin: 20px;
}
button{
	margin-left: 30px;
}
button:hover{
	opacity: 0.8;
</style>
</head>
<body>
	<div><br>
		<a href="z.php"><button type="button" style="float:right;background-color:#f44336;color:white;border:none;padding:13px;font-size:16px;hover:opacity:0.8">Logout</button></a>
<h2 style="font-size: 60px;"><center>Online Examination System</center></h2>

</div>
<h3 style="font-size: 40px;margin-left:35px">Select subject:</h3>
<div style="float:left">
	<div>
<img src="c.jpg" height="100" width="100"><br>
<a href="rules.php"><button type="button">C Programming</button></a></div>
<div>
<img src="c++.png"  style="margin-left: 30px" height="100" width="100"><br>
<a href="rules1.php"><button type="button">C++ Programming</button></a></div>
<div>
<img src="dss.png" height="100" width="100"><br>
<a href="rules2.php"><button type="button">Data Structure</button></a></div>
<div>
<img src="php.png" height="100" width="100"><br>
<a href="rules3.php"><button type="button">PHP</button></a></div>
<div>
<img src="css.png" height="100" width="100"><br>
<a href="rules4.php"><button type="button">CSS</button></a></div>
</div>

</body>
</html>