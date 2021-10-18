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
?>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="post" action="">
	<div class="box">
	<center><img src="kc.png" width="100px" alt=""></center>
	<?php
		include('navbar2.html');
	?>
	<div class="inner-box">
		<h1 align="center">REGISTRATION FORM</h1>
		<a class="title2">Permanent Address</a>
		<div class="box1">
			Village/town :<br><input type="text" name="village" required><br><br>
			Post Office :<br><input type="text" name="postOffice" required><br><br>
			Pin Number :<br><input type="tel" name="pin" required><br><br>
			District :<br><input type="text" name="district" required><br><br>
			State :<br><input type="text" name="state"  required><br><br>
			Nationality :<br><input type="text" name="nation" required><br><br>
		</div>
		<a class="title2">Correspondence Address</a>
		<div class="box1">
			Village/town :<br><input type="text" name="village2" required><br><br>
			Post Office :<br><input type="text" name="postOffice2" required><br><br>
			Pin Number :<br><input type="tel" name="pin2" required><br><br>
			District :<br><input type="text" name="district2" required><br><br>
			State :<br><input type="text" name="state2" required><br><br>
			Nationality :<br><input type="text" name="nation2" required><br><br>
		</div>
		<div style="text-align:center"><input type="submit" name="submit" value="Next Page"><br></div>
	</div>
	</div>
        <ul class="page">
                    <li> <a>Page 1</a></li>
                    <li> <a class="active">Page 2</a></li>
                    <li> <a>Page 3</a></li>
                    <li> <a>Page 4</a></li>
        </ul>
	</form>
</body>
</html>

<?php
        include('dbcon.php');
        if(isset($_POST['submit']))
        {
        $id=$_SESSION['user'];
	$vill=$_POST['village'];
	$po=$_POST['postOffice'];
	$pn=$_POST['pin'];
	$dist=$_POST['district'];
	$st=$_POST['state'];
	$nat=$_POST['nation'];
	$vill2=$_POST['village2'];
	$po2=$_POST['postOffice2'];
	$pn2=$_POST['pin2'];
	$dist2=$_POST['district2'];
	$st2=$_POST['state2'];
	$nat2=$_POST['nation2'];
	$query="INSERT INTO regi2 VALUES('$vill','$po','$pn','$dist','$st','$nat','$vill2','$po2','$pn2','$dist2','$st2','$nat2','$id')";
	 $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			?> 
                          <script>
                          alert('Data Updated Successfully.');
                          window.open('regi3.php','_Self'); 
                          </script>
                          <?php
        }
         else
                         {
                            ?> 
                          <script>
                          alert('Data Updated failed');
                          window.open('regi2.php','_Self'); 
                          </script>
                          <?php 
                         }
        }
?>
		