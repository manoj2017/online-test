<html>
<head>
	<title>Add Ques</title>
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
padding:20px 88.5px;
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
.container{
	font-size:20px;
	align-items: center;
	margin-left: 340px;
	margin-right: 340px;
	border-style:ridge;
	border-color: #f1f1f1;
	border-width: 2px;
	padding:30px;
	background-color:#f1f1f1;
}
input [type=number] , input[type=text]{
	width:75%;
padding:8px 20px;
margin: 8px 0;
display: inline-block;
box-sizing: border-box;
}
</style>
</head>
<body>
	<?php
if(isset($_POST['submit']))
{
 $ques_no =$_POST['ques_no'];		
 $ques =$_POST['ques'];	
 $choice1 =$_POST['choice1'];
 $choice2 =$_POST['choice2'];
 $choice3 =$_POST['choice3'];
 $choice4 =$_POST['choice4'];	
 $correct =$_POST['correct'];

$host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="teacher";

$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

$sql = "INSERT INTO phpquestion (question_no,question,choice1,choice2,choice3,choice4,correct) VALUES ('$ques_no', '$ques' , '$choice1' , '$choice2' , '$choice3' , '$choice4' , '$correct')";


if ($conn->query($sql) === TRUE) {
  header("Location:y.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
}
?>

	<form>
	<div class="btn">
<a href="tpanel.php"><button type="button" class="button">HOME</button></a>
<a href="#add.php"><button type="button" class="button">ADD QUESTION</button></a>
<button class="button">QUESTION LIST</button>
<button class="button">VIEW RESULTS</button>
<button class="button">LOGOUT</button>
</div>
<br><br>
<h2 style="font-size: 40px;"><center>Teacher's Panel - Add Question</center></h2>
<div class="container">
<label>Question No.  :</label>
<input type="number" style="padding:8px" name="ques_no"><br>
<label>Question &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
<input type="text" placeholder="Enter Question..." name="ques"><br>
<label>Choice One &nbsp&nbsp&nbsp:</label>
<input type="text" placeholder="Enter Choice One..." name="choice1"><br>
<label>Choice Two &nbsp&nbsp&nbsp:</label>
<input type="text" placeholder="Enter Choice Two..." name="choice2"><br>
<label>Choice Three &nbsp:</label>
<input type="text" placeholder="Enter Choice Three..." name="choice3"><br>
<label>Choice Four &nbsp&nbsp&nbsp:</label>
<input type="text" placeholder="Enter Choice Four..." name="choice4"><br>
<label>Correct No. &nbsp&nbsp&nbsp&nbsp:</label>
<input type="number" style="padding:8px" name="correct"><br><br>
<center><button type="submit" name="submit" style="padding:12px 15px;background-color: green; color:white; border:none">Add Question</button></center>
	</div>
</form>
</body>
</html>
