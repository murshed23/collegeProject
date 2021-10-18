<?php
session_start();
?>
<html>
	<head>
		<title>LogIn Form</title>
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
		<h1 align="center">LOGIN</h1>
			<center><img src="user.png" width="108px" height="100px" ></center>
			<div class="tbox">
				<input type="email" name="email" placeholder="Enter Email" required><br/><br/>
			</div>
			<div class="tbox">
				<input type="password" name="password" placeholder="Enter Password" required><br/><br/>
			</div>
			<input class="btn" type="submit" name="submit" value="LOG IN"><br/><br/>
                        <a class="b1" href="http://localhost/web/forget.php">Forget Password?<a/><br>
			<a class="b2" href="http://localhost/web/register.php">Don't have an account? Register<a/><br/>
                        
		</div>
	</form>
	</body>
</html>
<?php
	error_reporting(E_ALL^E_NOTICE);
	include('dbcon.php');
	if(isset($_POST['submit']))
	{
        $count=0;
			
		$email=$_POST['email'];
		$password=$_POST['password'];
		
                $query="select * from register where email='$email' and password='$password'";
                $data=mysqli_query($conn,$query);
                $result= mysqli_fetch_assoc($data);
                
                $count= mysqli_num_rows($data);
		if($count==0)
		{
                    echo"
			<script>alert('Invalid email or password')</script>
			<script>window.location='login.php'</script>
			";
                }
                else
                {	
					$id=$result['id'];
                    $_SESSION['user']=$id;
                    
                    $qry="INSERT INTO login VALUES ('$email','$password','$id')";
                    $dat=mysqli_query($conn,$qry);
                    header("Location: Dashboard.php");
                }
		
		
	}
?>