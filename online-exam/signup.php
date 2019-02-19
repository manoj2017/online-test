<html>
<head><style>
input[type=text], input[type=password] , input[type=email]{
 width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
button{
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  float:left;
  width: 50%%;
  opacity: 0.9;
}

</style>
</head>
<body>

<?php
if(isset($_POST['submit']))
{
 $name =$_POST['name'];		
 $dob =$_POST['dob'];	
 $email =$_POST['email'];	
 $pwd =$_POST['password'];

$host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="online_exam";

$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
 $result=mysqli_query($conn,"SELECT email FROM student WHERE email='$email'");
 if(mysqli_num_rows($result)!=0)
 {
  echo "Email Id already exists";
 }
else{
$sql = "INSERT INTO student (name,dob,email, password) VALUES ('$name', '$dob' , '$email' , '$pwd')";

if ($conn->query($sql) === TRUE) {
  header("Location:y.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
    
}/*function test_input($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;*/

?>
	<form method="post" >
	<h1>Sign Up</h1>
	<p>Please fill in this form to create an account.</p>
	<hr>
	<label for="name"><b>Name:</b></label>
	<input type="text" placeholder="Enter Full Name" name="name" required autocomplete="off"><br><br>

	<label for="dob"><b>Date of Birth: </b></label>
	<input type="date" name="dob" required><br><br><br>


	<label for="email"><b>Email:</b></label>
	<input type="email" placeholder="Enter Email Address" name="email" required autocomplete="off"><br><br>
	<label><b>Password:</b></label>
	<input type="password" placeholder="Set Password" name="password" minlength="6" required autocomplete="off"><br><br>

  <a href="first.php"> <button type="button" style="padding:20px 20px;background-color: #f44336;width:50%" name="submit1">CANCEL</button></a>

	<button type="submit" style="padding:20px 20px;background-color: #4CAF50;width:50%" name="submit">SIGNUP</button>
  <div align="right">Already registered?<a href="login.php">Login </a>Here</div>
</form>
</body>

</html>