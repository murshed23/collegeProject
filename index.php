<?php
session_start();
?>
<html>
	<head>
		<title>Karimganj College Home Page</title>
		<link rel="stylesheet" href="style.css">
		<style>
		.notif{
		position: relative;
		animation: mymove 5s infinite;
		color:red;
		}
		.ntf{
		color:red;
		}
		@keyframes mymove{
		from {left:0%;}
		to {left:50%;}
		}
		
ul{
	list-style-type:none;
	margin:0;
	padding-bottom: 80px;
	overflow:hidden;
	border:0px;
	background-color:white;
	position:sticky;
	top:0;
}
li{
	float:left;
}
li a{
	display:block;
	color:#666;
	text-align:center;
	padding:14px 16px;
	text-decoration:none;
}
li a:hover:not(.active){
	background-color:#009879;
}
li a:hover{
color:white;
background:#009879;
}
.dropbtn {
  background-color: white;
  color: #666;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline;
  border: 0px;
}

.drop-con {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 0px 8px 16px rgba(0,0,0,0.2);
  padding:12px 16px;
  z-index: 1;
}

.drop-con a {
  color: black;
  padding: 5px 16px;
  text-decoration: none;
  display: block;
}
.drop-con a:hover {background-color: white;}

.dropdown:hover .drop-con {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
		</style>
	</head>
	
	<body>
	<form method="post" action="">
	<div style="margin:20px; padding:15px;background-color:black;border-radius: 10px 10px 10px 10px;">
		<img src="kc.png" width="100px" alt="" style=" float: left;  border-radius: 5px;">
		<center><a style="color:white;font-variant:small-caps; font-size:80px">Karimganj College</a></center>
	</div>
	<div class="inner-box">
		<ul>
	<li><a class="active" href="index.php">Home</a></li>
	<li><a href="contact.php">Contact us</a></li>
	<li><a href="about.php">About</a></li>
	<li><button class="dropdown"><a class="dropbtn">Student</a>
		<div class="drop-con">
		<a href="register.php">Register</a>
		<a href="login.php">Login</a>
	</div>
	</button>
	</li>
	<li><a href="admin.php">Administrator</a></li>

</ul>

		<br>
		
		<div style="padding-top:5px;padding-left:15%;padding-right:15%;">
		<center><img src="clg.jpeg" width="60%" alt="" style="  border-radius: 5px;">	</center><br><br>
		<h3>Welcome to Karmganj College site</h3>
		<br><br>
		<p>Established in 1946, Karimganj College is one of the pioneering Colleges of Assam, imparting education in Science, Arts & Commerce. 
		Situated on the bank of Kushiara River demarcating Indo- Bangladesh Border, the College is playing a significant role for last six decades 
		in the field of Higher Education of the region. Today, it is one of the leading colleges under Assam University. The college has been 
		reaccredited with 'B' grade with CGPA 2.78 in 4.0 point scale by NAAC in the year 2010. It is a great pleasure to mention that the college 
		has been selected as one of the two IT-institutes of Assam under NEC programme and accordingly, the college is offering two degree programmes 
		viz. B.Sc. (Computer Science) and BCA affiliated to Assam University from the academic Session 2005-06. The College has also introduced 
		B.Sc. Honours Programme in Biotechnology from the session 2006-07. The college welcomes the new generation of students who enter this institution 
		with hearts vibrating with hopes and aspirations. Let every student of this institution develop intellectual and moral power in a healthy 
		environment and strengthen himself/herself physically, mentally and spiritually.<a href="about.php"> more...</a></p><br><br>
		
		<div class="notif"><a href="login.php">**Registration and Application form-fillup for TDC Even Semester(non-CBCS) 2020**</a></div><br><br>
		<div class="ntf"><a href="prac.pdf" download>**Practical Examination routine for TDC Even Semester(Non-CBCS) 2020**</a></div><br><br>
		<div class="ntf"><a href="online.pdf" download>**List of Students appearing online TDC Even Semester(Non-CBCS) Examination 2020**</a></div><br><br>
		<div class="ntf"><a href="routine.pdf" download>**Routine for TDC Even Semester(Non-CBCS) Examination 2020**</a></div><br><br>
          
		</div>
		</div>
		</div>
	</form>
	</body>
</html>