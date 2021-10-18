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
    <form method="post" action="" enctype="multipart/form-data">
	<div class="box">
	<center><img src="kc.png" width="100px" alt=""></center>
	<?php
		include('navbar2.html');
	?>
	<div class="inner-box">
		<h1 align="center">REGISTRATION FORM</h1>
		<a class="title2">Details regarding Matric/HSLC/Equivalent</a>
		<div class="box1">
			Institute Attended :<br><input type="text" name="institution" required><br><br>
			Board :<br><input type="text" name="board" required><br><br>
			Marks Obtained :<br><input type="number" name="mark" required><br><br>
			Total Marks :<br><input type="number" name="total" required><br><br>
			Percentage Obtained :<br><input type="float" name="percentage" required><br><br>
			Upload Marksheet :<input type="file" name="marksheet" required><br><br>
		</div>
		<a class="title2">Details regarding 10+2/HS/Equivalent</a>
		<div class="box1">
			Institute Attended :<br><input type="text" name="institution2" required><br><br>
			Board :<br><input type="text" name="board2" required><br><br>
			Marks Obtained :<br><input type="number" name="mark2" required><br><br>
			Total Marks :<br><input type="number" name="total2" required><br><br>
			Percentage Obtained :<br><input type="float" name="percentage2" required><br><br>
			Upload Marksheet :<input type="file" name="marksheet2" required><br><br>
		</div>
		<div style="text-align:center"><input type="submit" name="submit" value="Next Page"><br></div>
	</div>
	</div>
        <ul class="page">
                    <li> <a>Page 1</a></li>
                    <li> <a>Page 2</a></li>
                    <li> <a class="active">Page 3</a></li>
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
        $inst=$_POST['institution'];
	$brd=$_POST['board'];
	$mrk=$_POST['mark'];
	$ttl=$_POST['total'];
	$perc=$_POST['percentage'];
	$mrksht=$_FILES["marksheet"]["name"];
	$mTemp=$_FILES["marksheet"]["tmp_name"];
	$inst2=$_POST['institution2'];
	$brd2=$_POST['board2'];
	$mrk2=$_POST['mark2'];
	$ttl2=$_POST['total2'];
        $perc2=$_POST['percentage'];
	$mrksht2=$_FILES["marksheet2"]["name"];
	$m2Temp=$_FILES["marksheet2"]["tmp_name"];
        
	$mfolder="hslc/".$mrksht;
        $m2folder="hs/".$mrksht2;
        move_uploaded_file($mTemp, $mfolder);
        move_uploaded_file($m2Temp, $m2folder);
            
	$query="INSERT INTO regi3 VALUES('$inst','$brd','$mrk','$ttl','$perc','$mfolder','$inst2','$brd2','$mrk2','$ttl2','$perc2','$m2folder','$id')";
	 $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			?> 
                          <script>
                          alert('Data Updated Successfully.');
                          window.open('regi4.php','_Self'); 
                          </script>
                          <?php
        }
         else
                         {
                            ?> 
                          <script>
                          alert('Data Updation failed');
                          window.open('regi3.php','_Self'); 
                          </script>
                          <?php 
                         }
        }
?>