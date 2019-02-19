<html>

<head>

<title> Student Registration Form </title>

</head>

<body>

	

<form action="print.php" method="post">
<fieldset>

<legend><h1 Align="center">STUDENT REGISTRATION FORM</h1></legend>
 

<label>total number of candidates registered:</label> 
<?php
 
$con = mysqli_connect("localhost", "root", "", "register");
 
$count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM register"));
 
echo $count;

?>
<br>
<label for="firstname">First Name: </label>
<input type="text" id="firstname" name="firstname"><!--
<label for="image">Upload your passport size photo</label>
<input type="file" id="image" name="upfile">
<input type="submit" name="submit" value="Upload">
-->
<br>
<br>

<label for="lastname">Last Name:</label>
<input type="text" id="lastname" name="lastname" required>

<br>
<br>

<label for="fathername">Father Name:</label>
<input type="text" id="fathername" name="fathername" required>

<br>
<br>

<label for="email">Email id:</label>
<input type="email" id="email" name="email" size="30" required>

<br>
<br>

<label for="no">Contact number:</label>
<input type="number" id="no" name="cn" minlength="10" maxlength="10" required>

<br>
<br>

<label for="yesno">Gender:</label>
Male:
<input type="radio" id="yesno" name="yesorno" value="M">
Female:
<input type="radio" id="yesno" name="yesorno" value="F">

<br>
<br>

<label> Choose Subject/s:</label> <br>
<Input type="checkbox" name="choose[]" value="Communication Skills for Professionals"> Communication Skills for Professionals <br>
<Input type="checkbox" name="choose[]" value="Advanced Mathematics"> Advanced Mathematics <br>
<Input type="checkbox" name="choose[]" value="Physics"> Physics<br>
<Input type="checkbox" name="choose[]" value="Introduction to Programming"> Introduction to Programming <br>
<Input type="checkbox" name="choose[]" value="Human Values"> Human Values <br>
<Input type="checkbox" name="choose[]" value="Industrial Management"> Industrial Management <br>

<br>
<br>

<label>Branch:</label>
<select name="branch">

<option value="cse">CSE</option>
<option value="civil">Civil</option>
<option value="it">IT</option>
<option value="mech">Mechanical</option>
<option value="elec">Electrical</option>
<option value="chem">Chemical</option>




</select>
<br>
<br>
<br>
<br>
<input type="submit" name="submit" value="Submit">

</fieldset>
</form>


</body>

</html>