<?php
include_once 'header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Contact Us - Holy Spirit School Cubao</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #6f2c2c;
}

h1 {
  color: white;
  margin-bottom: 60px;
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
  margin-bottom: 70px;
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

.contact {
  text-align: left;
  margin:auto;
  max-width: 500px;
  color: white;
}

.footer {
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #191919;
  color: white;
  text-align: center;
  margin-top: 50px;
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
  <a href="admission.php" >Admission</a>
  <a href="contact.php" class="active">Contact</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="padding-left:16px" align="center">
  <div>
  <h1>Contact Us</h1></div>
  <div class="contact" align="center">
  <p><strong>Holy Spirit School </strong>29 Ilang-Ilang Street, Cubao, Quezon City</p>
  <p><strong>Contact Number:</strong> (02) 721 7689</p>
  <p><strong>Email:</strong> hsscubao@gmail.com</p>
  <img src="address.png" align="center"></div>
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
</body>
</html>
