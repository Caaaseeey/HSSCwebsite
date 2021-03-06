<?php
include_once 'header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>About Us - Holy Spirit School Cubao</title>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #6f2c2c;
}

h2 {
  color: white;
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
}

.topnav a {
  float: left;
  display: block;
  color: #000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  z-index: 1000;
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

.texts {
  max-width: 650px;
  margin: auto;
  line-height: 2;
}

.bgpic {
  width:100%;
  max-width: 500px;
  display: block;
  height: auto;
  margin: 0;
}

.Background {
  color: white;
}

.misvision {
  float: left;
  max-width: 500px;
  margin: auto;
  margin-top: auto;
  margin-left: auto;
  text-align: center;
  padding-left: 50px;
  padding-right: 50px;
  color: white;
}

.goal {
  float: inherit;
  max-width: 500px;
  margin: auto;
  align-items: center;
  padding-left: 50px;
  padding-right: 50px;
  color: white;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.footer {
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #191919;
  color: white;
  text-align: center;
  padding-top: 2em;
  padding-bottom: 2em;
  position: inherit;
  flex-shrink: 0;
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
  <a href="home.html" class="logo">Holy Spirit School Cubao</a>
</div>
<div class="topnav" id="myTopnav">
  <a href="home.php" >Home</a>
  <a href="about.php" class="active">About Us</a>
  <a href="admission.php">Admission</a>
  <a href="contact.php">Contact</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="bgpic"><img src="Entrance.jpg" alt="Holy Spirit School Cubao"></div>
<div style="padding-left:16px">
  <div class="texts" style="text-align:center">
    <div class="Background">
    <h2>Brief Background</h2>
    <p>Please input school's Brief Background</p><br>
    </div>
    <div class="misvision">
    <h2>Mission</h2>
    <p><i>We commit ourselves<br>
    to the Christian and holistic<br>
    formation of persons and<br>
    leaders as agents of<br>
    transformation of society.</i></p><br>
    <h2>Vision</h2>
    <p><i>We envision a person<br>
    afire with the Spirit of Excellence<br>
    who lives out the Truth in Love.</i></p><br>
    </div>
    <div class="goal">
    <h2>Goals</h2>
    <p><strong>With God:</strong><br>
    <i>Imbibe Christ's values<br>
    especially simplicity of lifestyle</i></p>
    <p><strong>Self:</strong><br>
    <i>Enhance God-given talents for<br>
    lifelong learning.</i></p>
    <p><strong>Others:</strong><br>
    <i>Respond to the need of the<br>
    society through selfless service.</i></p>
    <p><strong>Creation:</strong><br>
    <i>Promote the integrity of creation.</i></p><br>
    </div>
  </div>
   <div class="gallery" style="text-align:center">
     <h2>Gallery</h2>
     <img src="" alt="image1">
     <img src="" alt="image2">
     <img src="" alt="image3">
     <img src="" alt="image4">
     <img src="" alt="image5">
     <img src="" alt="image6">
     <img src="" alt="image7">
     <img src="" alt="image8"><br>
     <img src="" alt="image9">
     <img src="" alt="image10">
     <img src="" alt="image11">
     <img src="" alt="image12">
     <img src="" alt="image13">
     <img src="" alt="image14">
     <img src="" alt="image15">
     <img src="" alt="image16">
   </div>
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
