
<html>
<body>
<?php
session_start();
 $_SESSION['username'];
 
  if(empty($_SESSION['username']))
  {
  	header("Location:login page.php");

  }

echo "<br>";

$prev=$_GET['username'];

$link= mysqli_connect("localhost","root","","register"); 
$query= "SELECT * FROM register WHERE email_id='$prev'";
$result= mysqli_query($link,$query);
 

if(mysqli_num_rows($result)==1)
{

	$row=mysqli_fetch_array($result);
	echo "Firstname:       ";
echo $row['firstname'];
echo "<br>";

echo "Lastname:    ";
echo $row['lastname'];
echo "<br>";

echo "Fathername:    ";
echo $row['fathername'];
echo "<br>";

echo "Email id:    ";
echo $row['email_id'];
echo "<br>";

echo "Contact number:    ";
echo $row['contact_number'];
echo "<br>";

echo "Gender:        ";
echo $row['gender'];
echo "<br>";

echo "Subjects Choosen:    ";
echo $row['subjects'];
echo "<br>";

echo "Branch:    ";
echo $row['branch'];
echo "<br><br><br><br>";    
}
else
{
	echo "You have not registered yet";
}

?>
<a href="x.php"><input type="submit" name="submit" value="Log out"></a>
</body>
</html>