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
		<div class="box1">
                    Upload your Photo : <input type="file" name="photo" required><br><br>
                    Upload Signature :<input type="file" name="sign" required><br><br>

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
    $pName=$_FILES["photo"]["name"];
    $pTemp=$_FILES["photo"]["tmp_name"];
    $sName=$_FILES["sign"]["name"];
    $sTemp=$_FILES["sign"]["tmp_name"];

    $pfolder="photo/".$pName;
    $sfolder="sign/".$sName;
    move_uploaded_file($pTemp, $pfolder);
    move_uploaded_file($sTemp, $sfolder);
    
        $query="INSERT INTO pic VALUES ('$pfolder','$sfolder','$id')";
        $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			?> 
                          <script>
                          alert('Data Updated Successfully.');
                          window.open('regprint.php','_Self'); 
                          </script>
                          <?php
        }
         else
                         {
                            ?> 
                          <script>
                          alert('Data Updated failed');
                          window.open('regi4.php','_Self'); 
                          </script>
                          <?php 
                         }

}
?>