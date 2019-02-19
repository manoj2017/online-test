
<html>
<head>
	<title>Teacher's Panel</title>
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
	<?php
session_start();
  $_SESSION['username'];
 
  if(empty($_SESSION['username']))
  {
  	header("Location:tlogin.php");

  }

?>
<form>
	<div class="btn">
<a href="#tpanel.php"><button type="button" class="button">HOME</button></a>
<a href="add.php"><button type="button" class="button">ADD QUESTION</button></a>
<a href="list1.php"><button type="button" class="button">QUESTION LIST</button></a>
<button type="button" class="button">VIEW RESULTS</button>
<a href="z1.php"><button type="button" class="button">LOGOUT</button></a>
</div>
	</form>
<br><br><br><br>
<h1><center>Teacher's Panel</center></h1><br>
<div class="container">
<h2><center>Welcome to Teacher's Panel</center></h2>
<h3><center>Add more tests for your students....</center></h3>
</div>

</body>
</html>