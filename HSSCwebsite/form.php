<?php
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>FillUpRegForm</title>
    <link href="StyleSheet1.css" rel="stylesheet" />
    <script src="">
    </script>
    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #6f2c2c;
}
.formz {
  color: white;
  margin-bottom: 75px;
  margin-left: 100px;
}
h1 {
  color: white;
  margin-left: 100px;
}
h2 {
  color: white;
  margin-left: 100px;
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

.table1 {
  width: 50%;
  border-collapse: collapse;
  float: left;
}

.announcement {
  padding-left: 55px;
}

.footer {
  display: table-row;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #191919;
  color: white;
  text-align: center;
  padding-top: 2em;
  padding-bottom: 2em;
  height: 0;
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
  <a href="home.php" class="logo">Holy Spirit School Cubao</a>
</div>
<div class="topnav" id="myTopnav">
  <a href="home.php">Home</a>
  <a href="about.php">About Us</a>
  <a href="admission.php">Admission</a>
  <a href="contact.php">Contact</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
    <h1> Online Registration and Assessment</h1>
    <h2> Greetings in the love of the Triune God!</h2>

<div class="formz">

<form id="formz" action="includes/form.inc.php" method="post">
    <br>
    <br>
    <!-- student -->
    <label><b>Last Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="lname" required><br><br>

    <label><b>First Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="fname" required><br><br>

    <label><b>Middle Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="mname" required><br><br>

    <label><b>Suffix Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="sname" required><br><br>

    <label><b>Home Address</b></label><br>
    <i>Enter complete home address with format No. Street name, subdivision name, barangay name, city</i><br>
    <input type="text" name="haddress" required><br><br>

    <label><b>Age</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="age" required><br><br>

    <label><b>Email address</b></label><br>
    <i>Please use a valid email address</i><br>
    <input type="text" name="mail" required><br><br>

    <label><b>Verify Email address</b></label><br>
    <i>Re-enter your valid email address</i><br>
    <input type="text" name="vemail" required><br><br>

    <label><b>Name of school last attended</b></label><br>
    <i>Write N/A if not applicable</i><br>
    <input type="text" name="pschool" required><br><br>

    <label><b>Year attended from previous school</b></label><br>
    <i>Indicate the school year e.g 2018-2019. Write N/A if not applicable</i><br>
    <input type="text" name="pyear" required><br><br>

    <label><b>Nationality</b></label><br>
    <input type="text" name="nationality" required><br><br>

    <label><b>Sex<b></label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>

    <label<b>Place of Birth</b></label><br>
    <input type="text" name="pbirth" required><br><br>

    <label><b>Month of Birth</b></label><br>
    <select name = "bmonth" required>
        <option value = "M">Month</option>
        <option value = "Jan">January</option>
        <option value = "Feb">Febuary</option>
        <option value = "March">March</option>
        <option value = "April">April</option>
        <option value = "May">May</option>
        <option value = "June">June</option>
        <option value = "July">July</option>
        <option value = "Aug">August</option>
        <option value = "Sept">September</option>
        <option value = "Oct">October</option>
        <option value = "Nov">November</option>
        <option value = "Dec">December</option>
    </select>
    <br>
    <label><b>Day of Birth</b></label><br>
    <select name = "bday" required>
        <option value = "D">Day</option>
        <option value = "01">01</option>
        <option value = "02">02</option>
        <option value = "03">03</option>
        <option value = "04">04</option>
        <option value = "05">05</option>
        <option value = "06">06</option>
        <option value = "07">07</option>
        <option value = "08">08</option>
        <option value = "09">09</option>
        <option value = "10">10</option>
        <option value = "11">11</option>
        <option value = "12">12</option>
        <option value = "13">13</option>
        <option value = "14">14</option>
        <option value = "15">15</option>
        <option value = "16">16</option>
        <option value = "17">17</option>
        <option value = "18">18</option>
        <option value = "19">19</option>
        <option value = "20">20</option>
        <option value = "21">21</option>
        <option value = "22">22</option>
        <option value = "23">23</option>
        <option value = "24">24</option>
        <option value = "25">25</option>
        <option value = "26">26</option>
        <option value = "27">27</option>
        <option value = "28">28</option>
        <option value = "29">29</option>
        <option value = "30">30</option>
        <option value = "31">31</option>
    </select>
    <br>
    <label><b>Year of Birth</b></label><br>
    <select name = "byear" required>
        <option value = "Y">Year</option>
        <option value = "01">2015</option>
        <option value = "02">2014</option>
        <option value = "03">2013</option>
        <option value = "04">2012</option>
        <option value = "05">2011</option>
        <option value = "06">2010</option>
        <option value = "07">2009</option>
        <option value = "08">2008</option>
        <option value = "09">2007</option>
        <option value = "10">2006</option>
        <option value = "11">2005</option>
        <option value = "12">2004</option>
        <option value = "13">2003</option>
        <option value = "14">2002</option>
        <option value = "15">2001</option>
        <option value = "16">2000</option>
        <option value = "17">1999</option>
        <option value = "18">1998</option>
        <option value = "19">1997</option>
        <option value = "20">1996</option>
        <option value = "21">1995</option>
        <option value = "22">1994</option>
        <option value = "23">1993</option>
        <option value = "23">1992</option>
        <option value = "24">1991</option>
        <option value = "25">1990</option>
        <option value = "26">1989</option>
        <option value = "27">1988</option>
        <option value = "28">1987</option>
        <option value = "29">1986</option>
        <option value = "30">1985</option>
    </select>
    <br>
    <br>

    <label><b>Religion</b></label><br>
    <i>Write N/A if not applicable</i><br>
    <input type="text" name="religion" required><br><br>

    <!-- mother -->
    <label><b>Mother's Last Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="mlname" required><br><br>

    <label><b>Mother's First Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="mfname" required><br><br>

    <label><b>Mother's Middle Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="mmname" required><br><br>

    <label><b>Mother's Suffix Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="msname" required><br><br>

    <label><b>Mother's Occupation</b></label><br>
    <input type="text" name="moccupation" required><br><br>

    <label><b>Contact Number of Mother</label></b><br>
    <i>Write N/A if no Contact Number</i><br>
    <input type="text" name="mcnum" required><br><br> required


    <!--father-->
    <label><b>Father's Last Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="flname" required><br><br>

    <label><b>Father's First Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="ffname" required><br><br>

    <label><b>Father's Middle Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="fmname" required><br><br>

    <label><b>Father's Suffix Name</b></label><br>
    <i>Please use a capital letter on the first letter</i><br>
    <input type="text" name="fsname" required><br><br>

    <label><b>Father's Occupation</b></label><br>
    <input type="text" name="foccupation" required><br><br>

    <label><b>Contact Number of Father</label></b><br>
    <i>Write N/A if no Contact Number</i><br>
    <input type="text" name="fcnum" required><br><br>

    <label><b>Grade Level</b></label><br>
    <select name = "grade" required>
        <option value = "GL">Level</option>
        <option value = "Grade 1">Grade 1</option>
        <option value = "Grade 2">Grade 2</option>
        <option value = "Grade 3">Grade 3</option>
        <option value = "Grade 4">Grade 4</option>
        <option value = "Grade 5">Grade 5</option>
        <option value = "Grade 6">Grade 6</option>
        <option value = "Grade 7">Grade 7</option>
        <option value = "Grade 8">Grade 8</option>
        <option value = "Grade 9">Grade 9</option>
        <option value = "Grade 10">Grade 10</option>
        <option value = "Grade 11">Grade 11</option>
        <option value = "Grade 12">Grade 12</option>
    </select>
    <br>
    <br>

    <button type="submit" name="submit">Submit</button>

    <a href="admission.php">back</a>
    </form>

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
