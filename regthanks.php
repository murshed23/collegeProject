<?php
     error_reporting(E_ALL^E_NOTICE);
     session_start();
     if(isset($_SESSION['user']))
     {
     }
     else
     {
         header('location:login.php');
     }
     $id=$_SESSION['user'];
     include 'dbcon.php';
     $qry="SELECT * From regi1 Where ID='$id'";
     $run=mysqli_query($conn,$qry);
     $dat= mysqli_fetch_assoc($run);
?>
<html>
<head>
	<title>Registration Successful</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="box">
	<center><img src="kc.png" width="100px" alt=""></center>
	<?php
		include('navbar2.html');
	?>
	<div class="inner-box">
			<h3 style="text-align:center;">Thank you for completing your registration</h3><br>
			<p style="text-align:center;">Information provided by the applicant are uploaded successfully for registration.</p><br><br>
                        <?php
                            if($dat['arrear']==0||$dat['arrear']==1||$dat['arrear']==2||$dat['arrear']==3||$dat['arrear']==4){
                                ?>
                                <p style="text-align:center; color: green">You are Eligible for Examination Form fillup.</p><br><br>
                                <p style="text-align:center; color: green">
                                    Proceed for <a class="link" href="http://localhost/web/application.php">Examination form fillup.</a>
                                </p>
                        <?php    }
                            else{
                        ?>
                               <p style="text-align:center; color: red">As you have <?php echo $dat['arrear'] ?> Arrear in previous semsesters. You are not Eligible for Examination Form fillup.</p><br><br>
                               <p style="text-align:center; color: red">
                                    Proceed for <a class="link" href="http://localhost/web/logout.php">Logout</a>
                               </p> 
			<?php
                            }
                        ?>
		</div>
	</div>
</body>
</html>