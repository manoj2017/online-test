<?php
session_start();
 $_SESSION['username'];
 
   if(empty($_SESSION['username']))
   {
   	header("Location:admin_login.php");
   }
?>
<html>
<head>
	<title>Admin Panel</title>
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
padding:20px 85px;
color: white;
float:left;
border:none;
font-size: 15px;
}
.btn .button:hover {
background-color:tomato;
color:black;
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
</style>
</head>
<body>
<form>
	<div class="btn">
<a href="#admin_panel.php"><button type="button" class="button">HOME</button></a>
<a href="manage_s.php"><button type="button" class="button">MANAGE STUDENTS</button></a>
<a href="tinfo.php"><button type="button" class="button">TEACHERS INFO</button></a>
<a href="list.php"><button type="button" class="button">QUESTION LIST</button></a>
<a href="z2.php"><button type="button" class="button">LOGOUT</button></a>
</div>
	</form>
<br><br><br><br>
<h1><center>Admin Panel</center></h1><br>
<div class="container">
<h2><center>Welcome to Control Admin Panel</center></h2>
<h3><center>You can manage everything from here....</center></h3>
</div>

</body>
</html>