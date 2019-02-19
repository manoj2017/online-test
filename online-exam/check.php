<html>
<?php
session_start();
error_reporting(0);
 $_SESSION['email'];
 $c=$_SESSION['email'];
$d=0;
  if(empty($_SESSION['email']))
  {
  	header("Location:login.php");

  }

  $host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="online_exam";
$conn= new mysqli ($host,$dbusername,$dbpassword,$dbname);
  

  $link= mysqli_connect("localhost","root","","online_exam");

  if(isset($_POST['submit']))
  {
  	if(!empty($_POST['x']))
  	{
     $count = count($_POST['x']);
      echo "You have attempted " .$count. " questions out of 10";
      echo "<br>";
  }

  $x=$_POST[x];
 // echo print_r($x);
  foreach($x as $key=>$value){
     $id=$key; 
    $ans=$value; 
$q="SELECT * FROM question where id='$id'";
    $result=mysqli_query($link,$q);
    $q2= mysqli_fetch_assoc($result);
     $corr=$q2['correct'];

if($corr==$ans)
{
  $d=$d+1;
}
}
 echo "Your score is:";
 echo $d; 
 if($d<1){
  echo "You couldn't pass the test. Better luck next time:-)";
 }
 else{?>
<a href="certificate.php">Click here to download the certificate</a>
  <?php
 }
}
?>
<form>
	<a href="z.php"><button type="button" style="float:right;background-color:#f44336;color:white;border:none;padding:13px;font-size:16px;hover:opacity:0.8">Logout</button></a>
</form>
</html>