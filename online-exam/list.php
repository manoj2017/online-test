<?php

session_start();
 $_SESSION['username'];
 
   if(empty($_SESSION['username']))
   {
   	header("Location:admin_login.php");
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
  	 
$result = mysqli_query($link,"SELECT * from question");
?>

<html>
<head>
	<title>View Ques</title>
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
padding:20px 83.5px;
color: white;
float:left;
border:none;
font-size: 15px;
}
.btn .button:hover {
background-color:tomato;
color:black;
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
<a href="admin_panel.php"><button type="button" class="button">HOME</button></a>
<a href="manage_s.php"><button type="button" class="button">MANAGE STUDENTS</button></a>
<a href="tinfo.php"><button type="button" class="button">TEACHERS INFO</button></a>
<a href="#list.php"><button type="button" class="button">QUESTION LIST</button></a>
<a href="z2.php"><button type="button" class="button">LOGOUT</button></a>
</div>
	</form><br><br><br><br>
	<h1><center>Admin Panel - Teachers Info</center></h1><br>
<table>
<tr>
	<th>Id</th>
	<th>Subject</th>
	<th>Question</th>
	<th>Choice 1</th>
	<th>Choice 2</th>
	<th>Choice 3</th>
	<th>Choice 4</th>
	<th>Correct</th>	
</tr>	

 
<?php
while($row=mysqli_fetch_assoc($result))
	{
?>
<tr>
	<td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["subject"]; ?></td>
    <td><?php echo $row['question']; ?></td>
    <td><?php echo $row['choice1']; ?></td>
    <td><?php echo $row['choice2']; ?></td>
    <td><?php echo $row['choice3']; ?></td>
    <td><?php echo $row['choice4']; ?></td>
    <td><?php echo $row['correct']; ?></td>
</tr>
<?php
}
$conn->close();
?>
</table>
</body>
</html>