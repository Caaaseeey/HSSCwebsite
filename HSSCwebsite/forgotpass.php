<?php
include_once 'header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login - Holy Spirit School Cubao</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #6f2c2c;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 50px;
}

.header a {
  color: black;
  font-size: 20px;
  text-decoration: none;
  padding: 5px;
}

.header a.logo {
  font-size: 40px;
  font-weight: bold;
}

.topnav {
  overflow: hidden;
  background-color: #bbb;
  position: sticky;
  width: 100%;
  top: 0;
  z-index: 1000;
  margin-bottom: 100px;
}

.topnav a {
  float: left;
  display: block;
  color: #000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #800000;
  color: white;
}

.topnav a.active {
  background-color: #620000;
  color: white;
}

.topnav .icon {
  display: none;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

{box-sizing: border-box;}

.form-popup {
max-width: 400px;
margin: auto;
border: 3px solid #f1f1f1;
border-radius: 20px;
z-index: 9;
}

.form-container {
max-width: 400px;
padding: 10px;
padding-left: 40px;
padding-right: 40px;
background-color: white;
border-radius: 15px;
}

.form-container input[type=text], .form-container input[type=number] {
width: 90%;
padding: 15px;
margin: 5px 0 22px 0;
border: none;
background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=number]:focus {
background-color: #ddd;
outline: none;
}

.form-container .btn {
background-color: #6f2c2c;
color: white;
padding: 16px 20px;
border: none;
border-radius: 20px;
cursor: pointer;
width: 100%;
margin-bottom:10px;
opacity: 0.8;
}

.form-container .btn:hover, .open-button:hover {
opacity: 1;
}

.footer {
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #191919;
  margin-top: 100px;
  color: white;
  text-align: center;
  padding-top: 2em;
  padding-bottom: 2em;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .header {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="header">
  <img src="hssc.jpg" height="60px" width="60px" alt="HSSC logo">
  <a href="home.php" class="logo">Holy Spirit School Cubao</a>
</div>
<div class="topnav" id="myTopnav">
  <a href="home.php" >Home</a>
  <a href="about.php" >About Us</a>
  <a href="admission.php">Admission</a>
  <a href="contact.php">Contact</a>
  <a href="login.php" class="active">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="form-popup" id="myForm">
<form action="/action_page.php" class="form-container">
<h2>Forgot your Password?</h2>
<h6><i>To change your password, please fill in the necessary details<br>
You need an active email address associated with your account to receive instructions.</i></h6><br>

<label for="idnum"><b>ID Number</b></label>
<input type="number" placeholder="Enter ID Number" name="idnum" required>

<label for="lastname"><b>Last Name</b></label>
<input type="text" placeholder="Enter Last Name" name="lastname" required>

<label for="firstname"><b>First Name</b></label>
<input type="text" placeholder="Enter First Name" name="firstname" required>

<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>

<a href="login.html">Go back to Login</a><br><br>
<button type="submit" class="btn"><b>Submit<b></button>
</form>
</div>

<div class="footer">
  <p>29 Ilang-Ilang Street, Cubao, Quezon City | hsscubao@gmail.com</p>
  <p>Copyright 2021 Holy Spirit School Cubao, Quezon City</p>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script>
window.onscroll = function() {myFunction1()};

var topnav = document.getElementById("topnav");
var sticky = topnav.offsetTop;

function myFunction1() {
  if (window.pageYOffset >= sticky) {
    topnav.classList.add("sticky")
  } else {
    topnav.classList.remove("sticky");
  }
}
</script>
<script>
function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
