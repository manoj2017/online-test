<?php
session_start();
 $_SESSION['email'];
 $b=$_SESSION['email'];

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
$q="SELECT * FROM question where id='10'";
    $result=mysqli_query($link,$q);
    $q2= mysqli_fetch_assoc($result);
    $corr=$q2['correct'];

    

?>

<html>
<head>
  <title>Test</title>
  <style>
  h1{
    font-size:40px;
        
  }
  .navbar {
  background-color: red;
  opacity:0.8;
  color:white;
  padding :10px;
  position: fixed; /* Set the navbar to fixed position */
   /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}
   
</style>
</head>
<body>

  <form method="POST" action="check.php">
    <div class="navbar">
      <h1><center>Welcome to this exam..</center></h1>
      
        <div id="countdown"></div>
<div id="notifier"></div>

<script type="text/javascript">

(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }

  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 10 ? 0 : x);
  }

  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       }
    })(); // End countdown
  }

  setTimer(60, {
    10: function () { display("notifier", "Just 10 seconds to go"); },
     5: function () { display("notifier", "5 seconds left");        },
     0: function () { display("notifier", "Time is up");         }
  });
})();  

</script><br>
Your exam is running....
    </div><br><br><br><br><br><br><br><br><br><br>
  <div>
  <div class="card" style="border:solid;border-color:#f1f1f1;text-align: center;background-color:#f1f1f1;">
    <h3 class="text-center card-header">Welcome <?php echo $_SESSION['email']; ?> , you have to select only 1 out of the 4. Best of luck :) </h3></div>
    <?php
    $q= "SELECT subject FROM result WHERE username='$b' ";
    $q1=mysqli_query($link,$q);
    $q2=mysqli_fetch_assoc($q1);
    $sub=$q2['subject'];


      $query = "SELECT * FROM question WHERE subject='$sub' LIMIT 10 ";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_assoc($result))
 // $id=$row['id'];
  {?><div class="card" style="border:solid;border-left-width: 450px;border-right-width: 450px;border-bottom-width:20px;border-color:#f1f1f1;font-size: 20px">
     &nbsp<?php echo $row['question_no'];?>.&nbsp  <?php echo $row['question'];?><br><br>

    <input type="radio" name="x[<?php echo $row['id'];?>]" value="1" ><?php echo $row['choice1']; ?><br> 
    <input type="radio" name="x[<?php echo $row['id'];?>]" value="2" ><?php echo $row['choice2']; ?><br>
    <input type="radio" name="x[<?php echo $row['id'];?>]" value="3"><?php echo $row['choice3']; ?><br>
    <input type="radio" name="x[<?php echo $row['id'];?>]" value="4"><?php echo $row['choice4']; ?> <br> 
     </div>
<?php
  }
?><center><button style="background-color: green;color:white;border:none;padding:15px 20px" type="submit" name="submit">Submit</button></center>

</div>
</form>
</body>
</html>