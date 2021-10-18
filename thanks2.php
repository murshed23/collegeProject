<?php
     error_reporting(E_ALL^E_NOTICE);
     session_start();
     include('dbcon.php');
     if(isset($_SESSION['user']))
     {
     }
     else
     {
         header('location:login.php');
     }
?>

<html>
<head>
	<title>Logged In</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="">
	<center><img src="kc.png" width="100px" alt=""></center>
	<?php 
         include('navbar2.html');
    ?>
        
		<div class="inner-box" align="center">
			<h3 style="text-align:center;">You are logged in to your account</h3><br>

                        <a href="regi1.php">
                            Proceed for Registration
                        </a>    
			
		</div>
    </form>
</body>
</html>

