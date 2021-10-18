<html>
	<head>
		<title>Register Form</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
	<form action="registerconnect.php" method="post">
		<div class="box">
			<div align="center">
				<img src="kc.png" width="100px" alt="">
			</div>
			<h1 class="title">Karimganj College</h1>
			<?php 
			 include('navbar.html');
			?>
			<div class="col-md-4 offset-md-4" ></div>
			<div class="inner-box col-md-4 offset-md-4" align="center">
			<form action="thanks.html" method="post">
			<center><img src="user.png" width="108px" height="100px" ></center>
			<h1>REGISTER</h1>
			<div class="tbox"><input type="text" name="name" placeholder="Enter Name" required><br></div>
			<div class="tbox"><input type="password" name="password" placeholder="Enter Password" required><br></div>
			<div class="tbox"><input type="email" name="email" placeholder="Enter Email" required><br></div>
			<input class="btn" type="submit" value="submit"><br>
			<a class="b" href="http://localhost/web/login.php">Already have an account? Login</a><br>
			</form>
			</div>
		</div>
	</form>
	</body>
</html>