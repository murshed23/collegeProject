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
		<a class="title2">General informations</a>
		<div class="box1">
			Name :<br><input type="text" name="name" placeholder="Enter Name" required><br><br>
			Father's Name :<br><input type="text" name="father" placeholder="Enter Father's Name" required><br><br>
			Mother's Name :<br><input type="text" name="mother" placeholder="Enter Mother's Name" required><br><br>
			Gender :<br>
				<input type="radio" name="gender" value="m" required>Male
				<input type="radio" name="gender" value="f" required>Female
				<input type="radio" name="gender" value="o" required>Other<br><br>
			Category :<br>
				<input type="radio" name="category" value="general" required>General
				<input type="radio" name="category" value="sc" required>SC
				<input type="radio" name="category" value="st" required>ST
				<input type="radio" name="category" value="other" required>Other<br><br>
			Religion :<br><input type="text" name="religion" placeholder="Enter Religion" required><br><br>
			Date of Birth : <input type="date" name="birthdate" required><br><br>
			
		</div>
                <a class="title2">Current Academic Details</a>
                <div class="box1">
                    College name :<br><input type="text" name="college" placeholder="Enter the college name" required><br><br>
                    Board/University :<br><input type="text" name="university" placeholder="Enter board/university" required><br><br>
                    Semester : 
			<select id="semester" name="semester">
                                <option value="none" selected disabled hidden>Select an Option</option>
				<option value="first">1st Semester</option>
				<option value="second">2nd Semester</option>
				<option value="third">3rd Semester</option>
				<option value="fourth">4th Semester</option>
				<option value="fifth">5th Semester</option>
				<option value="sixth">6th Semester</option>
			</select><br><br>
			Stream : 
			<select id="stream" name="stream">
                                <option value="none" selected disabled hidden>Select an Option</option>
				<option value="science">Science</option>
				<option value="commerce">Commerce</option>
				<option value="arts">Arts</option>
			</select><br><br>
                        Honours(if any) :<br><input type="text" name="honours" value="None" placeholder="Enter Honours subject"><br><br>
                        Total Arrear in Previous Semesters : <br><input type="number" name="arrear" value="0" placeholder="Enter Number of Arrears" required><br><br>
                </div>
		<div style="text-align:center"><input type="submit" name="submit" value="Next Page"><br></div>
                </div>
                <ul class="page">
                    <li> <a class="active">Page 1</a></li>
                    <li> <a>Page 2</a></li>
                    <li> <a>Page 3</a></li>
                    <li> <a>Page 4</a></li>
                </ul>
        </div>
	</form>
</body>
</html>
<?php
        include('dbcon.php');
        if(isset($_POST['submit']))
        {
        $id=$_SESSION['user'];
	$name=$_POST['name'];
	$fname=$_POST['father'];
	$mname=$_POST['mother'];
	$gen=$_POST['gender'];
	$cat=$_POST['category'];
	$rel=$_POST['religion'];
	$dob=$_POST['birthdate'];
        $clg=$_POST['college'];
        $univ=$_POST['university'];
	$sem=$_POST['semester'];
	$strm=$_POST['stream'];
	$hon=$_POST['honours'];
        $ar=$_POST['arrear'];
        $query="INSERT INTO regi1 VALUES('$name','$fname','$mname','$gen','$cat','$rel','$dob','$clg','$univ','$sem','$strm','$hon','$ar','$id')";
	 $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			?> 
                          <script>
                          alert('Data Updated Successfully.');
                          window.open('regi2.php','_Self'); 
                          </script>
                          <?php
        }
         else
                         {
                            ?> 
                          <script>
                          alert('Data Updation failed');
                          window.open('regi1.php','_Self'); 
                          </script>
                          <?php 
                         }
        }
?>