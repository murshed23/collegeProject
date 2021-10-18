<?php
     error_reporting(E_ALL);
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
     $qry="SELECT * From regi1 Where ID='$id'";
     $run=mysqli_query($conn,$qry);
     $dat= mysqli_fetch_assoc($run);
     $qry2="SELECT * From application Where ID='$id'";
     $run2=mysqli_query($conn,$qry2);
     $dat2= mysqli_fetch_assoc($run2);
?>
<html>     
<head>
<title>Student Application Form</title>
<link rel="stylesheet" href="style.css">
<body>
<form method="post" action="">
<center><img src="kc.png" width="100px" alt=""></center>
<?php
	include('navbar2.html');
?>
<div class="inner-box">
<h1 align="center">APPLICATION FORM</h1>
<a class="title2">CURRENT SEMESTER DETAILS</a>
<div class="box1">
College name :<br><input type="text" name="college" placeholder="Enter your college name" required><br><br>
Board/University :<br><input type="text" name="university" placeholder="Enter board/university" required><br><br>
Semester :
    <select id="semester" name="semester">
        <option value="first">1st Semester</option>
	<option value="second">2nd Semester</option>
	<option value="third">3rd Semester</option>
	<option value="fourth">4th Semester</option>
	<option value="fifth">5th Semester</option>
	<option value="sixth">6th Semester</option>
    </select><br><br>
    Current Semester subjects details:<br><br>
    		 <table class="c-table">
        <thead>
            <tr>
                <th>Sl. no.</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>1.</td>
                <td><input type="text" name="sub1" value="" required /> </td>
                <td><input type="text" name="subcode1" value="" required /></td>
            </tr>
            
            <tr>
                <td>2.</td>
                <td><input type="text" name="sub2" value="" required /> </td>
                <td><input type="text" name="subcode2" value="" required /></td>
            </tr>
            
            <tr>
                <td>3.</td>
                <td><input type="text" name="sub3" value="" required /> </td>
                <td><input type="text" name="subcode3" value="" required /></td>
            </tr>
            
            <tr>
                <td>4.</td>
                <td><input type="text" name="sub4" value="" required /> </td>
                <td><input type="text" name="subcode4" value="" required /></td>
            </tr>
            <?php
            if($dat2['paper']>=5){
            ?>
            <tr>
                <td>5.</td>
                <td><input type="text" name="sub5" value="none" required /> </td>
                <td><input type="text" name="subcode5" value="none" required /></td>
            </tr>
            <?php
            }
            if($dat2['paper']>=6){
            ?>
            <tr>
                <td>6.</td>
                <td><input type="text" name="sub6" value="none" required /> </td>
                <td><input type="text" name="subcode6" value="none" required /></td>
            </tr>
            <?php
            }
            if($dat2['paper']>=7){
            ?>
            <tr>
                <td>7.</td>
                <td><input type="text" name="sub7" value="none" required /> </td>
                <td><input type="text" name="subcode7" value="none" required /></td>
            </tr>
            <?php
            }
            if($dat2['paper']>=8){
            ?>
            <tr>
                <td>8.</td>
                <td><input type="text" name="sub8" value="none" required /> </td>
                <td><input type="text" name="subcode8" value="none" required /></td>
            </tr>
            <?php
            }
            if($dat2['paper']>=9){
            ?>
            <tr>
                <td>9.</td>
                <td><input type="text" name="sub9" value="none" required /> </td>
                <td><input type="text" name="subcode9" value="none" required /></td>
            </tr>
            <?php
            }
            if($data2['paper']>=10){
            ?>
            <tr>
                <td>10.</td>
                <td><input type="text" name="sub10" value="none" required /> </td>
                <td><input type="text" name="subcode10" value="none" required /></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table><br><br>
    
	Do you have any Arrear in <?php 
                                if($dat['semester']=="first"||$dat['semester']=="third"||$dat['semester']=="fifth")
                                {
                                    echo "Odd";
                                }
                                elseif ($dat['semester']=="second"||$dat['semester']=="fourth"||$dat['semester']=="sixth") {
                                    echo "Even";
                                }
                            ?> Semester:<br>
        <input type="radio" name="choice" value="y" required>Yes
	<input type="radio" name="choice" value="n" required>No
	<br><br>
        Number of Arrear in <?php 
                                if($dat['semester']=="first"||$dat['semester']=="third"||$dat['semester']=="fifth")
                                {
                                    echo "Odd";
                                }
                                elseif ($dat['semester']=="second"||$dat['semester']=="fourth"||$dat['semester']=="sixth") {
                                    echo "Even";
                                }
                                ?> Semester: <br><input type="number" name="arrear" value="0" required><br><br>
    
</div>
<div style="text-align:center"><input type="submit" name="submit" value="Next Page"><br></div>
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
include 'dbcon.php';
if(isset($_POST['submit']))
{   
    
    $clg=$_POST['college'];
    $univ=$_POST['university'];
    $sem=$_POST['semester'];
    $s1=$_POST['sub1'];
    $sc1=$_POST['subcode1'];
    $s2=$_POST['sub2'];
    $sc2=$_POST['subcode2'];
    $s3=$_POST['sub3'];
    $sc3=$_POST['subcode3'];
    $s4=$_POST['sub4'];
    $sc4=$_POST['subcode4'];
    $s5=$_POST['sub5'];
    $sc5=$_POST['subcode5'];
    $s6=$_POST['sub6'];
    $sc6=$_POST['subcode6'];
    $s7=$_POST['sub7'];
    $sc7=$_POST['subcode7'];
    $s8=$_POST['sub8'];
    $sc8=$_POST['subcode8'];
    $s9=$_POST['sub9'];
    $sc9=$_POST['subcode9'];
    $s10=$_POST['sub10'];
    $sc10=$_POST['subcode10'];
    $ch=$_POST['choice'];
    $ar=$_POST['arrear'];  
    
    $query="INSERT INTO application2 VALUES('$clg','$univ','$sem','$s1','$sc1',"
            . "'$s2','$sc2','$s3','$sc3','$s4','$sc4','$s5','$sc5','$s6','$sc6',"
            . "'$s7','$sc7','$s8','$sc8','$s9','$sc9','$s10','$sc10','$ch','$ar','$id')";
    $data= mysqli_query($conn, $query);
        
    if($data)
    {   
			?> 
                          <script>
                          alert('Data Updated Successfully.');
                          window.open('application3.php','_Self'); 
                          </script>
                          <?php
    }
         else
                         {
                            ?> 
                          <script>
                          alert('Data Updation failed');
                          window.open('application2.php','_Self'); 
                          </script>
                          <?php 
                         }
    
}

?>

                              