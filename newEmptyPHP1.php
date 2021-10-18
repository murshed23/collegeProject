<?php
     error_reporting(E_ALL^E_NOTICE);
     session_start();
     
     include 'dbcon.php';
     if(isset($_SESSION['user']))
     {
     }
     else
     {
         header('location:login.php');
     }
     $id=$_SESSION['user'];
     $qry="SELECT * From application2 Where ID='$id'";
     $run=mysqli_query($conn,$qry);
     $dat= mysqli_fetch_assoc($run);
     $qry2="SELECT * From regi1 Where ID='$id'";
     $run2=mysqli_query($conn,$qry2);
     $dat2= mysqli_fetch_assoc($run2);     
     
?>
<html>
<head>
<title>Student Application Form</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<form method="post" action="" enctype="multipart/form-data">
<center><img src="kc.png" width="100px" alt=""></center>
<?php
	include('navbar2.html');
?>
<div class="inner-box">
<h1 align="center">APPLICATION FORM</h1>
<a class="title2">ARREAR DETAILS</a>
<div class="box1">
    Arrear paper details(if any) :<br><br>
    
    <table class="c-table">
        <thead>
            <tr>
                
                <th>Semester</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Marks obtained</th>
                <th>Total Marks</th>
                <th>Attach Marksheets</th>
            </tr>
        </thead>
        <tbody>
            <?php switch($dat['arrear']){
                case 4:
            ?>
            <tr>
                
                <td>
                    <select id="semester" name="semester">
                        <option value="none" selected disabled hidden>Select an Option</option>
                        <option value="first">1st Semester</option>
                        <option value="second">2nd Semester</option>
                        <option value="third">3rd Semester</option>
                        <option value="fourth">4th Semester</option>
                        <option value="fifth">5th Semester</option>
                        <option value="sixth">6th Semester</option>
                    </select>
                </td>
                <td><input type="text" name="sub4" value="None" /></td>
                <td><input type="text" name="subcode4" value="None" /></td>
                <td><input type="number" name="mark4" value="None" /></td>
                <td><input type="number" name="total4" value="None" /></td>
                <td><input type="file" name="marksheet4" value="None" /></td>
            </tr>
            <?php 
                case 3:
            ?>
            <tr>
                
                <td>
                    <select id="semester" name="semester3">
                        <option value="none" selected disabled hidden>Select an Option</option>
                        <option value="first">1st Semester</option>
                        <option value="second">2nd Semester</option>
                        <option value="third">3rd Semester</option>
                        <option value="fourth">4th Semester</option>
                        <option value="fifth">5th Semester</option>
                        <option value="sixth">6th Semester</option>
                    </select>
                </td>
                <td><input type="text" name="sub3" value="None" /></td>
                <td><input type="text" name="subcode3" value="None" /></td>
                <td><input type="number" name="mark3" value="None" /></td>
                <td><input type="number" name="total3" value="None" /></td>
                <td><input type="file" name="marksheet3" value="None" /></td>
            </tr>
            <?php
                case 2:
            ?>
            
            <tr>
                
                <td>
                    <select id="semester" name="semester2">
                        <option value="none" selected disabled hidden>Select an Option</option>
                        <option value="first">1st Semester</option>
                        <option value="second">2nd Semester</option>
                        <option value="third">3rd Semester</option>
                        <option value="fourth">4th Semester</option>
                        <option value="fifth">5th Semester</option>
                        <option value="sixth">6th Semester</option>
                    </select>
                </td>
                <td><input type="text" name="sub2" value="None" /></td>
                <td><input type="text" name="subcode2" value="None" /></td>
                <td><input type="number" name="mark2" value="None" /></td>
                <td><input type="number" name="total2" value="None" /></td>
                <td><input type="file" name="marksheet2" value="None" /></td>
            </tr>
            <?php
                case 1:
            ?>
            <tr>
                
                <td>
                    <select id="semester" name="semester1">
                        <option value="none" selected disabled hidden>Select an Option</option>
                        <option value="first">1st Semester</option>
                        <option value="second">2nd Semester</option>
                        <option value="third">3rd Semester</option>
                        <option value="fourth">4th Semester</option>
                        <option value="fifth">5th Semester</option>
                        <option value="sixth">6th Semester</option>
                    </select>
                </td>
                <td><input type="text" name="sub1" value="None" /> </td>
                <td><input type="text" name="subcode1" value="None" /></td>
                <td><input type="number" name="mark1" value="None" /></td>
                <td><input type="number" name="total1" value="None" /></td>
                <td><input type="file" name="marksheet1" value="None" /></td>
            </tr>
            <?php 
                break;
                default : echo "Not Valid";
            }
            ?>
        </tbody>
    </table>        
    <br><br>


</div>
<div style="text-align:center"><input type="submit" name="submit" value="Next Page"><br></div>
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

    if($dat2['semester']=="first"||$dat2['semester']=="second"||$dat['arrear']==0){
        $query="INSERT INTO application3 VALUES ('$id',NULL,NULL,NULL,NULL,NULL,NULL"
                . ",NULL,NULL,NULL,NULL,NULL,NULL"
                . ",NULL,NULL,NULL,NULL,NULL,NULL"
                . ",NULL,NULL,NULL,NULL,NULL,NULL)";
        $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			?> 
                          <script>
                          
                          window.open('application4.php','_Self'); 
                          </script>
                          <?php
        }
         
    }
    elseif(isset($_POST['submit']))
    {
	if($dat['arrear']==4)
	{
		
		$sem1=$_POST['semester1'];
		$s1=$_POST['sub1'];
		$sc1=$_POST['subcode1'];
		$m1=$_POST['mark1'];
		$t1=$_POST['total1'];
		$msName1=$_FILES["marksheet1"]["name"];
		$msTemp1=$_FILES["marksheet1"]["tmp_name"];
		
		$sem2=$_POST['semester2'];
		$s2=$_POST['sub2'];
		$sc2=$_POST['subcode2'];
		$m2=$_POST['mark2'];
		$t2=$_POST['total2'];
		$msName2=$_FILES["marksheet2"]["name"];
		$msTemp2=$_FILES["marksheet2"]["tmp_name"];
		
		$sem3=$_POST['semester3'];
		$s3=$_POST['sub3'];
		$sc3=$_POST['subcode3'];
		$m3=$_POST['mark3'];
		$t3=$_POST['total3'];
		$msName3=$_FILES["marksheet3"]["name"];
		$msTemp3=$_FILES["marksheet3"]["tmp_name"];
		
		$sem4=$_POST['semester4'];
		$s4=$_POST['sub4'];
		$sc4=$_POST['subcode4'];
		$m4=$_POST['mark4'];
		$t4=$_POST['total4'];
		$msName4=$_FILES["marksheet4"]["name"];
		$msTemp4=$_FILES["marksheet4"]["tmp_name"];
		
		

		$msfolder1="arrear1/".$msName1;
		$msfolder2="arrear2/".$msName2;
		$msfolder3="arrear3/".$msName3;
		$msfolder4="arrear4/".$msName4;
		
		move_uploaded_file($msTemp1, $msfolder1);
		move_uploaded_file($msTemp2, $msfolder2);
		move_uploaded_file($msTemp3, $msfolder3);
		move_uploaded_file($msTemp4, $msfolder4);

			$query="INSERT INTO application3 VALUES ('$id','$sem1','$s1','$sc1','$m1','$t1','$msfolder1',"
					. "'$sem2','$s2','$sc2','$m2','$t2','$msfolder2',"
					."'$sem3','$s3','$sc3','$m3','$t3','$msfolder3',"               
					. "'$sem4','$s4','$sc4','$m4','$t4','$msfolder4')";
			$data= mysqli_query($conn, $query);
			
			if($data)
			{   
				?> 
							  <script>
							  alert('Data Updated Successfully.');
							  window.open('application4.php','_Self'); 
							  </script>
							  <?php
			}
			 else
			{
				?> 
					<script>
					alert('Data Updation failed');
					window.open('application3.php','_Self'); 
					</script>
				<?php 
			}
        }
        elseif($dat['arrear']==3){
		
		$sem1=$_POST['semester1'];
		$s1=$_POST['sub1'];
		$sc1=$_POST['subcode1'];
		$m1=$_POST['mark1'];
		$t1=$_POST['total1'];
		$msName1=$_FILES["marksheet1"]["name"];
		$msTemp1=$_FILES["marksheet1"]["tmp_name"];
		
		$sem2=$_POST['semester2'];
		$s2=$_POST['sub2'];
		$sc2=$_POST['subcode2'];
		$m2=$_POST['mark2'];
		$t2=$_POST['total2'];
		$msName2=$_FILES["marksheet2"]["name"];
		$msTemp2=$_FILES["marksheet2"]["tmp_name"];
		
		$sem3=$_POST['semester3'];
		$s3=$_POST['sub3'];
		$sc3=$_POST['subcode3'];
		$m3=$_POST['mark3'];
		$t3=$_POST['total3'];
		$msName3=$_FILES["marksheet3"]["name"];
		$msTemp3=$_FILES["marksheet3"]["tmp_name"];

		$msfolder1="arrear1/".$msName1;
		$msfolder2="arrear2/".$msName2;
		$msfolder3="arrear3/".$msName3;
		
		move_uploaded_file($msTemp1, $msfolder1);
		move_uploaded_file($msTemp2, $msfolder2);
		move_uploaded_file($msTemp3, $msfolder3);

			$query="INSERT INTO application3 VALUES ('$id',$sem1','$s1','$sc1','$m1','$t1','$msfolder1',"
					. "'$sem2','$s2','$sc2','$m2','$t2','$msfolder2',"
					."'$sem3','$s3','$sc3','$m3','$t3','$msfolder3'"               
					. ",NULL,NULL,NULL,NULL,NULL,NULL)";
			$data= mysqli_query($conn, $query);
			
			if($data)
			{   
				?> 
							  <script>
							  alert('Data Updated Successfully.');
							  window.open('application4.php','_Self'); 
							  </script>
							  <?php
			}
			 else
			{
				?> 
					<script>
					alert('Data Updation failed');
					window.open('application3.php','_Self'); 
					</script>
				<?php 
			}
		}
                elseif($dat['arrear']==2){
		
		$sem1=$_POST['semester1'];
		$s1=$_POST['sub1'];
		$sc1=$_POST['subcode1'];
		$m1=$_POST['mark1'];
		$t1=$_POST['total1'];
		$msName1=$_FILES["marksheet1"]["name"];
		$msTemp1=$_FILES["marksheet1"]["tmp_name"];
		
		$sem2=$_POST['semester2'];
		$s2=$_POST['sub2'];
		$sc2=$_POST['subcode2'];
		$m2=$_POST['mark2'];
		$t2=$_POST['total2'];
		$msName2=$_FILES["marksheet2"]["name"];
		$msTemp2=$_FILES["marksheet2"]["tmp_name"];

		$msfolder1="arrear1/".$msName1;
		$msfolder2="arrear2/".$msName2;
		
		move_uploaded_file($msTemp1, $msfolder1);
		move_uploaded_file($msTemp2, $msfolder2);

			$query="INSERT INTO application3 VALUES ('$id',$sem1','$s1','$sc1','$m1','$t1','$msfolder1',"
					. "'$sem2','$s2','$sc2','$m2','$t2','$msfolder2'"
					.",NULL,NULL,NULL,NULL,NULL,NULL"               
					. ",NULL,NULL,NULL,NULL,NULL,NULL)";
			$data= mysqli_query($conn, $query);
			
			if($data)
			{   
				?> 
							  <script>
							  alert('Data Updated Successfully.');
							  window.open('application4.php','_Self'); 
							  </script>
							  <?php
			}
			 else
			{
				?> 
					<script>
					alert('Data Updation failed');
					window.open('application3.php','_Self'); 
					</script>
				<?php 
			}
		}
                elseif($dat['arrear']==1){
		
		$sem1=$_POST['semester1'];
		$s1=$_POST['sub1'];
		$sc1=$_POST['subcode1'];
		$m1=$_POST['mark1'];
		$t1=$_POST['total1'];
		$msName1=$_FILES["marksheet1"]["name"];
		$msTemp1=$_FILES["marksheet1"]["tmp_name"];

		$msfolder1="arrear1/".$msName1;
		
		move_uploaded_file($msTemp1, $msfolder1);

			$query="INSERT INTO application3 VALUES ('$id',$sem1','$s1','$sc1','$m1','$t1','$msfolder1'"
					. ",NULL,NULL,NULL,NULL,NULL,NULL"
					.",NULL,NULL,NULL,NULL,NULL,NULL"               
					. ",NULL,NULL,NULL,NULL,NULL,NULL)";
			$data= mysqli_query($conn, $query);
			
			if($data)
			{   
				?> 
							  <script>
							  alert('Data Updated Successfully.');
							  window.open('application4.php','_Self'); 
							  </script>
							  <?php
			}
			 else
			{
				?> 
					<script>
					alert('Data Updation failed');
					window.open('application3.php','_Self'); 
					</script>
				<?php 
			}
		}
    }
    
    

   

?>