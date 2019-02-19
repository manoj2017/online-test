<?php
session_start();
?>
<html>
<head>

</head>

<body>
<?php
if(isset($_POST['submit']))
{
 
 $username =($_POST['username']);
 
 $pw=trim($_POST['password']);

$_SESSION['username'] = $username;

 $link= mysqli_connect("localhost","root","","account");

$query = "SELECT * from account WHERE (username='$username' and password='$pw')";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)==1)
 
{
	header("Location:details.php? username=$username");
}
else
{
	echo "Either the entered username or password is incorrect";
} 
}
?>
<form method="post">
	<center>
 <img src="11.png" height="250" width="300"><br><br>
<label><b><style=font-size="20">Username:</b></label>
<input type="email" name="username" required autocomplete="off">
<br><br><br>
<label><b>Password:</b></label>
<input type="text" name="password" required autocomplete="off">
<br><br>
<a href="chngpw.php">Change password?</a>
<br><br><br>

<input type="submit" name="submit" value="Login">

</center>





</form>

</body>

</html>