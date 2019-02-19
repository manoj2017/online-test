<?php
session_start();
?>
<html>
<head>
	<title>Teacher login</title>
	<style>
	input[type=text], input[type=password]{
width:100%;
padding:12px 20px;
margin: 8px 0;
display: inline-block;
box-sizing: border-box;
}
button{
 width:50%;
 background-color: #4CAF50;
 color:white;
 padding:14px 20px;
 margin:8px 0px;
 cursor: pointer;
 border:none;
}
button:hover{
	opacity: 0.8;
}
.container{
	padding: 16px;
	font-size: 20px;
	align-items: center;
	margin-left: 340px;
	margin-right: 340px;
	border-style:ridge;
	border-color: #f1f1f1;
	border-width: 2px;
	padding:35px;
	background-color:#f1f1f1;
}
h1{
	font-size: 45px;	
}
</style>
</head>
<body>
	<?php
if(isset($_POST['submit']))
{
 
 $username =($_POST['username']);
 
 $pw = ($_POST['password']);

 $_SESSION['username'] = $username;

 $link= mysqli_connect("localhost","root","","online_exam");

$query = "SELECT * FROM teacher WHERE (username='$username' and password='$pw')";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)==1)
{
	//$d = mysqli_fetch_array()
	header('location:tpanel.php');
}
else
{
	echo "Either the entered username or password is incorrect";
}  
}
?>
	<form method="post"><br>
	<h1><center>Online Examination System - Teacher's Login</center></h1><br><br><br>
<div class="container">	
<label for="email"><b>Username:</b></label>
<input type="text" name="username" placeholder="Enter Username" required><br><br>

<label for="password"><b>Password:</b></label>
<input type="password" name="password" placeholder="Enter Password" required><br><br>
<a href="first.php"><button type="button" style="background-color:#f44336;float:left;" name="submit">Cancel</button></a>
<button type="submit" name="submit">Login Now</button>
</div>

</form>
	</body>

</html>