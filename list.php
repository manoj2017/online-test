<?php
session_start();
  $_SESSION['username'];
 $user=$_SESSION['username'];

  if(empty($_SESSION['username']))
  {
  	header("Location:tlogin.php");

  }

  $host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="online_exam";


 $link= mysqli_connect("localhost","root","","online_exam");
$conn= new mysqli ($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
	die('Connection error('.mysqli_connect_errno().')');
}
$q=mysqli_query($conn,"SELECT * FROM `teacher` WHERE `username`= '$user' " );
  	 $q1=mysqli_fetch_assoc($q);
    $sub=$q1['subject']; 
$result = mysqli_query($link,"SELECT * from question WHERE subject='$sub'");
    
   
?>
<html>
<head>
	<title>List</title>
	<style>
	h1{
		font-size: 45px;
		border-bottom: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }
    .btn{
		width: 100%;
	}
.btn .button {
background-color: red;
text-align: center;
padding:20px 90px;
color: white;
float:left;
border:none;
font-size: 15px;
}
.btn .button:hover {
background-color:tomato;
color:black;
}
h2{
	color:black;
	border-bottom: solid;
	border-color: #f1f1f1;
	padding: 17px;
	border-width: 2px;
}
table{
		border-collapse: collapse;
		width:100%;
		color:blue;
		font-size: 20px;
		text-align: left;
	}
	th{
		background-color:blue;
		color:white;
	}
    .Enable{
         color:green;
	}
	tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
	<form>
	<div class="btn">
<a href="tpanel.php"><button type="button" class="button">HOME</button></a>
<a href="add.php"><button type="button" class="button">ADD QUESTION</button></a>
<a href="list.php"><button class="button">QUESTION LIST</button></a>
<button class="button">VIEW RESULTS</button>
<button class="button">LOGOUT</button>
</div>
<br><br>
<h2 style="font-size: 40px;"><center>Teacher's Panel - Question List</center></h2>
<table>
<tr>
	<th>Question No</th>
	<th>Question</th>
	<th>Choice 1</th>
	<th>Choice 2</th>
	<th>Choice 3</th>
	<th>Choice 4</th>
	<th>Correct</th>
	<th>Action</th>	
</tr>	

 
<?php
while($row=mysqli_fetch_assoc($result))
	{
?>
<tr>
    <td><?php echo $row["question_no"]; ?></td>
    <td><?php echo $row['question']; ?></td>
    <td><?php echo $row['choice1']; ?></td>
    <td><?php echo $row['choice2']; ?></td>
    <td><?php echo $row['choice3']; ?></td>
    <td><?php echo $row['choice4']; ?></td>
    <td><?php echo $row['correct']; ?></td>
    

    <td><a href="enable.php">Remove</a></td>
</tr>
<?php
}
$conn->close();
?>
</form>
</body>
</html>