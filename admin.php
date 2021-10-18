<?php
session_start();
?>
<html>
	<head>
		<title>Admin LogIn Form</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
	<form method="post" action="">
		<center><img src="kc.png" width="100px" alt=""></center>
		<h1 class="title">Karimganj College</h1>
		<?php 
			include('navbar.html');
                ?>
		<div class="col-md-4 offset-md-4" ></div>
		<div class="cont2 col-md-4 offset-md-4" align="center">
			 <center><img src="user.png" width="108px" height="100px" ></center>
			<div class="tbox">
				<input type="text" name="email" placeholder="Enter ID" required><br/><br/>
			</div>
			<div class="tbox">
				<input type="password" name="password" placeholder="Enter Password" required><br/><br/>
			</div>
			<input class="btn" type="submit" name="submit" value="LOG IN"><br/><br/>
                        
                        
		</div>
	</form>
	</body>
</html>
<?php
	error_reporting(E_ALL^E_NOTICE);
	include('dbcon.php');
	if(isset($_POST['submit']))
	{
                
		$email=$_POST['email'];
		$password=$_POST['password'];
		
                
		if($email=='admin'&&$password=='1234')
		{
                         header("Location: admindash.php");
                }
                else
                {
                     echo"
			<script>alert('Invalid email or password')</script>
			<script>window.location='admin.php'</script>
			";
                    
               
                }
		
		
	}
?>