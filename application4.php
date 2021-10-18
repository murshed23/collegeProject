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
	 include 'dbcon.php';
	 $id=$_SESSION['user'];
     $qry="SELECT * From regi1 Where ID='$id'";
     $run=mysqli_query($conn,$qry);
     $dat= mysqli_fetch_assoc($run);
?>
<html>
<head>
	<title>Student Application Form</title>
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
		<h1 align="center">APPLICATION FORM</h1>
		<div class="box1">
                    Previous semester roll :<input type="number" name="roll" value="" required/>   
                    number :<input type="number" name="number" value="" required/><br><br>
                    Attach previous semester Admit card : <input type="file" name="admit" value="" required/><br><br>
					<?php 
                                if($dat['semester']=="third")
                                { 	?>
										Attach 1st Semester Marksheet : <input type="file" name="marksheet" value="None" required/><br><br>
									<?php
                                }
                                elseif ($dat['semester']=="fourth") {
                                    ?>
										Attach 2nd Semester Marksheet : <input type="file" name="marksheet" value="None" required/><br><br>
									<?php
                                }elseif ($dat['semester']=="fifth"){
									?>
										Attach 1st Semester Marksheet : <input type="file" name="marksheet" value="None" required/><br><br>
										Attach 3rd Semester Marksheet : <input type="file" name="marksheet2" value="None" required/><br><br>
									<?php
									}elseif ($dat['semester']=="sixth"){
									?>
										Attach 2nd Semester Marksheet : <input type="file" name="marksheet" value="None" required/><br><br>
										Attach 4th Semester Marksheet : <input type="file" name="marksheet2" value="None" required/><br><br>
									<?php
									}
                                ?> 
                    Upload your Photo : <input type="file" name="photo" required/><br><br>
                    Upload Signature : <input type="file" name="sign" required/><br><br><br><br>
                    Date : <input type="date" name="date" value="" required/><br><br>
                    Place : <input type="text" name="place" value="" required/>
		</div>
	<div style="text-align:center"><input type="submit" name="submit" value="submit"><br></div>
	</div>
	</div>
        <ul class="page">
            <li> <a>Page 1</a></li>
            <li> <a>Page 2</a></li>
            <li> <a>Page 3</a></li>
            <li> <a class="active">Page 4</a></li>
        </ul>
	</form>
</body>
</html>

<?php
include('dbcon.php');
if(isset($_POST['submit']))
{   
    $id=$_SESSION['user'];
    $rol=$_POST["roll"];
    $no=$_POST["number"];
    $admName=$_FILES["admit"]["name"];
    $admTemp=$_FILES["admit"]["tmp_name"];
	$ms1=$_FILES["marksheet"]["name"];
    $msTemp1=$_FILES["marksheet"]["tmp_name"];
	$ms2=$_FILES["marksheet2"]["name"];
    $msTemp2=$_FILES["marksheet2"]["tmp_name"];
    $pName=$_FILES["photo"]["name"];
    $pTemp=$_FILES["photo"]["tmp_name"];
    $sName=$_FILES["sign"]["name"];
    $sTemp=$_FILES["sign"]["tmp_name"];
    $dt=$_POST["date"];
    $plc=$_POST["place"];

    $admfolder="admit/".$admName;
	$msfolder1="arrear1/".$ms1;
	$msfolder2="arrear2/".$ms2;
    $pfolder="applPhoto/".$pName;
    $sfolder="applSign/".$sName;
    move_uploaded_file($admTemp, $admfolder);
	move_uploaded_file($msTemp1, $msfolder1);
	move_uploaded_file($msTemp2, $msfolder2);
    move_uploaded_file($pTemp, $pfolder);
    move_uploaded_file($sTemp, $sfolder);
    
        $query="INSERT INTO application4 VALUES ('$rol','$no','$admfolder','$msfolder1','$msfolder2','$pfolder','$sfolder','$dt','$plc','$id')";
        $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			?> 
                              <script>
                              alert('Your Application Form-fillup is succesful.');
                              window.open('applprint.php','_Self'); 
                              </script>
                              <?php
        }
         else
                         {
                            ?> 
                          <script>
                          alert('Data Updateion failed');
                          window.open('application4.php','_Self'); 
                          </script>
                          <?php 
                         }

}
?>