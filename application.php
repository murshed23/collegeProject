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
<title>Student Application Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="">
<center><img src="kc.png" width="100px" alt=""></center>
<?php
	include('navbar2.html');
?>
<div class="inner-box">
<h1 align="center">APPLICATION FORM</h1>
<a class="title2">Fill up the following details</a>
<div class="box1">
College name :<br><input type="text" name="cname" placeholder="Enter the college name" required><br><br>
Stream :<br><input type="text" name="sname" placeholder="Enter your stream" required><br><br>
Major subject :<br><input type="text" name="msname" value="None" placeholder="Enter your major subject" required><br><br>
Number of Regular Papers to appear(including Practical Papers) : <br><input type="number" name="snum" value="4" required><br><br>
</div>
<a class="title2">PERSONAL INFORMATION</a>
<div class="box1">
Name :<br><input type="text" name="name" placeholder="Enter your name" required><br><br>
Father's name :<br><input type="text" name="father" placeholder="Enter your father's name" required><br><br>
Mother's name :<br><input type="text" name="mother" placeholder="Enter your mother's name" required><br><br>
Gender :<br><input type="radio" name="gender" value="m" required>Male
<input type="radio" name="gender" value="f" required>Female
<input type="radio" name="gender" value="o" required>Other<br><br>
Category :<br><input type="radio" name="category" value="g" required>General
<input type="radio" name="category" value="sc" required>SC
<input type="radio" name="category" value="st" required>ST
<input type="radio" name="category" value="obc" required>OBC<br><br>
Date of Birth :<br><input type="date" name="birthdate" required><br><br>

</div>
<a class="title2">Permanent address</a>
<div class="box1">
Village :<br><input type="text" name="village" placeholder="Enter the name of your village" required><br><br>
Post office :<br><input type="text" name="postOffice" placeholder="Enter the name of your post office" required><br><br>
District :<br><input type="text" name="district" placeholder="Enter the name of your district" required><br><br>
State :<br><input type="text" name="state" placeholder="Enter the name of your state" required><br><br>
PIN :<br><input type="text" name="pin" placeholder="Enter your PIN" required><br><br>
</div>
<div style="text-align:center"><input type="submit" name="submit" value="Next Page"><br></div>
</div>
<ul class="page">
    <li> <a class="active">Page 1</a></li>
    <li> <a>Page 2</a></li>
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
        $clg=$_POST['cname'];
        $strm=$_POST['sname'];
        $hon=$_POST['msname'];
        $num=$_POST['snum'];
	
        $name=$_POST['name'];
	$fname=$_POST['father'];
	$mname=$_POST['mother'];
	$gen=$_POST['gender'];
	$cat=$_POST['category'];
	$dob=$_POST['birthdate'];
	$vill=$_POST['village'];
	$po=$_POST['postOffice'];
	$pn=$_POST['pin'];
	$dist=$_POST['district'];
	$st=$_POST['state'];
	$query="INSERT INTO application VALUES('$clg','$strm','$hon','$num','$name','$fname','$mname','$gen','$cat','$dob','$vill','$po','$pn','$dist','$st','$id')";
	 $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			?> 
                          <script>
                          alert('Data Updated Successfully.');
                          window.open('application2.php','_Self'); 
                          </script>
                          <?php
        }
         else
                         {
                            ?> 
                          <script>
                          alert('Data Updated failed');
                          window.open('application.php','_Self'); 
                          </script>
                          <?php 
                         }
        }
?>