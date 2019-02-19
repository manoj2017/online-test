<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.navbar {
  overflow: hidden;
  background-color: black;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 20px 70px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 20px 100px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: grey;
  color:black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
img:hover{
  transform: scale(1.1);
}


</style>
</head>
<body>

<div class="navbar">
  <a href="#home">HOME</a>
    <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">LOGIN
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="login.php">As Student</a>
    <a href="tlogin.php">As Teacher</a>
    <a href="admin_login.php">As Admin</a>
  </div>
  </div> 
  <a href="Signup.php">SIGNUP</a>
  <a href="login.php">TAKE TEST</a>
  <a href="about.php">ABOUT US</a>
  <a href="">CONTACT US</a>
</div>
<div style="border:white;display:inline">
    <img src="c1.jpg" height="270" width="400" style="float:left">
    <img src="php1.jpg" height="270" width="400" style="float:right"><br>
    <h1 style="color:black;font-size: 50px"><b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspONLINE<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp EXAMINATION<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPLATFORM</b></h1>
    <br>
    <img src="html.jpg" height="270" width="400">
    
    <img src="cpp3.jpg" height="270" width="400" style="float:right">
    
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}</script>

</body>
</html>
