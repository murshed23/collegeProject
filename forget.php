<?php
     error_reporting(E_ALL^E_NOTICE);
     session_start();
     
?>

<html>
	<head>
		<title>Unlock Password</title>
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
			<div class="tbox">
				<input type="email" name="email" placeholder="Enter Email" required><br/><br/>
			</div>
			<div class="tbox">
				<input type="password" name="password" placeholder="Enter New Password" required><br/><br/>
			</div>
			<input class="btn" type="submit" name="submit" value="UPDATE PASSWORD"><br/><br/>
			<a class="b1" href="http://localhost/web/login.php">Remember Password? Login<a/>
		</div>
	</div>
</body>
</html>

<?php
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
        $mail=$_POST['email'];
        $pass=$_POST['password'];
        $query="UPDATE register SET password='$pass' WHERE email='$mail'";
        $data= mysqli_query($conn, $query);
        
        if($data)
        {   
            ?>
            <script>
            alert('Password Updated Successfully.');
            window.open('login.php','_Self'); 
            </script>
            <?php
        }
         else
                         {
                            ?> 
                          <script>
                          alert('Password Updation failed');
                          window.open('forget.php','_Self'); 
                          </script>
                          <?php 
                         }
    
    }

?>