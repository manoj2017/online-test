<?php

	if(isset($_POST['submit']))
{   
	
 $firstname=$_POST['firstname'];

    /*if(isset($_POST['submit'])){
     $filebasename = basename($_FILES['upfile']['name']);
     $ext = strtolower(substr($filebasename,strrpos($filebasename, '.') + 1));


     if(($ext == "jpg" || $ext == "jpeg" || $ext == "png") && ($_FILES["upfile"]["type"] == "image/jpg" || $_FILES["upfile"]["type"] == "image/jpeg" || $_FILES["upfile"]["type"] == "image/png"))
     	{$desired_dir="uploads";
     	 $file_name=$FILES['upfile']['name'];
         if(file_exists($desired_dir . $file_name))
         {
         	$message= $file_name . "filename already exists";
         	  }
         else
         {
         	move_uploaded_file($_FILES["upfile"]["tmp_name"],$desired_dir . $file_name);
         	$message= $file_name . "successfully uploaded";

         }}
     else{
     	$message = "Error! not a valid format";
     }

    }*/
   
	$lastname=$_POST['lastname'];
	$fathername=$_POST['fathername'];
	$email=$_POST['email'];
	$contact_number=$_POST['cn'];
	$gender=$_POST['yesorno'];
    $choose=implode(',',$_POST['choose']);
	$branch=$_POST['branch'];
	$sub= explode(',',$choose);

	require("fpdf/fpdf.php");
$pdf= new fpdf();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"REGISTRATION DETAILS",1,1,'C');
$pdf->Cell(60,10,"Firstname:",1,0);
$pdf->Cell(0,10,$firstname,1,1);
$pdf->Cell(60,10,"Lasttname:",1,0);
$pdf->Cell(0,10,$lastname,1,1);
$pdf->Cell(60,10,"Fathername:",1,0);
$pdf->Cell(0,10,$fathername,1,1);
$pdf->Cell(60,10,"email Id:",1,0);
$pdf->Cell(0,10,$email,1,1);
$pdf->Cell(60,10,"contact number:",1,0);
$pdf->Cell(0,10,$contact_number,1,1);
$pdf->Cell(60,10,"Gender:",1,0);
$pdf->Cell(0,10,$gender,1,1);
$pdf->Cell(0,10,"Subjects Choosen:",1,1);
foreach($sub as $value){ 
$pdf->Cell(0,10,$value,1,1,'L'); 
}
$pdf->Cell(60,10,"Branch:",1,0);
$pdf->Cell(0,10,$branch,1,1);
$pdf->Output();

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="register";

$conn= new mysqli ($host,$dbusername,$dbpassword,$dbname);

if($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}

$sql= "INSERT INTO register (firstname,lastname,fathername,email_id,contact_number,gender,subjects,branch)
VALUES ('$firstname','$lastname','$fathername','$email','$contact_number','$gender','$choose','$branch')";

if($conn->query($sql) === TRUE){
	echo "Registered successfully";
}else{
	echo "Error:" . $sql . "<br>" . $conn->error;
}

  $conn->close();
   

}
?>