<html>
<body>
<?php
error_reporting(0);
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $opassword=$_POST['oldpassword'];
  $npassword=$_POST['newpassword'];
$link= mysqli_connect("localhost","root","","account");
$abc="SELECT * FROM account WHERE (username='$username' and password='$opassword')";
$result1= mysqli_query($link,$abc);
$query= "UPDATE account SET password=$npassword WHERE (username='$username'and password='$opassword')";
$result= mysqli_query($link,$query);

if(mysqli_num_rows($result1)==1)
	{echo "Password successfully changed";}
else{ echo "Username does not match with entered password";}
}

?>
<form method="post">
  <center><br><br><br>
<label><b>Username:</b></label><br><br>
<input type="email" placeholder="Enter Username" name="username" required><br><br><br>

<label><b>Old Password:</b></label><br><br>
<input type="text" placeholder="Enter Old Password" name="oldpassword" required><br><br><br>

<label><b>New Password:</b></label><br><br>
<input type="text" placeholder="Enter New Password" name="newpassword" minlength="6" required><br><br><br>

<input type="submit" name="submit" value="Submit">
  </center>

</form>
</body>
</html>