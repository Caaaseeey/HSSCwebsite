<?php
include_once 'header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Holy Spirit School Cubao</title>
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

.home {
  margin-top: 60px;
}

.table1 {
  max-width: 500px;
  margin: auto;
  border-collapse: collapse;
  float: left;
}

.announcement {
  background-color: #6f2c2c;
  border-style: groove;
  border-color: gold;
  border-radius: 20px;
  color: white;
  margin: auto;
  padding: 10px;
  padding-left: 40px;
  padding-right: 40px;
  margin-bottom: 50px;
  max-width: 580px;
  text-align: center;
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
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
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
  <a href="home.php" class="active">Home</a>
  <a href="about.php">About Us</a>
  <a href="admission.php">Admission</a>
  <a href="contact.php">Contact</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="padding-left:16px;">

  <div class="home">
    <table class="table1">
    <tr>
      <th>
      <ul>
      <video width="600" height="380" controls>
        <source src="https://" type="video/">
      </video>
      </ul>
     </th>
    </tr>
    </table>
    <table class="table2">
    <tr>
      <th>
      <ul>
      <!-- insert calendar code here --><img src="cal.png" width="550px" height="381px" alt="insert google calendar">
     </ul>
     </th>
    </tr>
   </table>
  </div>
  <div class="announcement" >
    <h3>Announcements:</h3>
    <p><i>Insert announcements here. Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</i></p>
  </div>
  <div class="announcement" >
    <h3>Events:</h3>
    <p><i>Insert Events here. Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</i></p>
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
