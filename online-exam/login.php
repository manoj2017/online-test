<?php
session_start();

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=email], input[type=password]{
width:100%;
padding:12px 20px;
margin: 8px 0;
display: inline-block;
box-sizing: border-box;
}
button{
 width:100%;
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
}
</style>
	</head>
<body>
	<?php
if(isset($_POST['submit']))
{
 
 $email =($_POST['email']);
 
 $pw=($_POST['password']);
 $_SESSION['email'] = $email;


 $link= mysqli_connect("localhost","root","","online_exam");

$query = "SELECT * from student WHERE (email='$email' and password='$pw')";
$q= "INSERT INTO result(username,subject) VALUE ('$email','not yet')";
$result=mysqli_query($link,$query);
$q1=mysqli_query($link,$q);
if(mysqli_num_rows($result)==1){
	header("Location:subject.php");
}
else
{
	echo "Either the entered username or password is incorrect";
}  
}
?>
<form method="post"><center>
	<h1>Online Examination System - Student Login</h1>
<img src="login.png" height="250" width="300"></center>
<div class="container">	
<label for="email"><b>Email Id:</b></label>
<input type="email" name="email" placeholder="Enter your Email Address" required>
<label for="password"><b>Password:</b></label>
<input type="password" name="password" placeholder="Enter Password" required>
<button type="submit" name="submit">Login</button>
</div>

<div style="background-color:#f1f1f1;padding:10px;">
<a href="first.php"><button type="button" name="cncl" style="width:auto;background-color:#f44336;color: white;padding:15px 18px">Cancel</button></a>
<div align="right">New user?<a href="Signup.php">Signup here</a> free</div>
</div>

</form>
</body>
</html>