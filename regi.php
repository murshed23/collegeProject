<?php
session_start();
?>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="post" action="rcon.php">
	<div class="box">
	<center><img src="kc.png" width="100px" alt=""></center>
	<?php
		include('navbar2.html');
	?>
	<div class="inner-box">
		<h1 align="center">REGISTRATION FORM</h1>
		<a class="title2">General informations</a>
		<div class="box1">
			Name :<br><input type="text" name="name" placeholder="Enter Name" required><br><br>
			Father's Name :<br><input type="text" name="fname" placeholder="Enter Father's Name" required><br><br>
			Mother's Name :<br><input type="text" name="mname" placeholder="Enter Mother's Name" required><br><br>
			Gender :<br>
				<input type="radio" name="gender" value="m" required>Male
				<input type="radio" name="gender" value="f" required>Female
				<input type="radio" name="gender" value="o" required>Other<br><br>
		</div>
		<div style="text-align:center"><input type="submit" value="submit"><br></div>
	</div>
	</form>
</body>
</html>