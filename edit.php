<?php
     include 'dbcon.php';
     $id=$_GET['id'];
     $qry="SELECT * From register Where ID='$id'";
     $run=mysqli_query($conn,$qry);
     $data=mysqli_fetch_assoc($run);
     $qry1="SELECT * From regi1 Where ID='$id'";
     $run1=mysqli_query($conn,$qry1);
     $data1=mysqli_fetch_assoc($run1);
     $qry2="SELECT * From regi2 Where ID='$id'";
     $run2=mysqli_query($conn,$qry2);
     $data2=mysqli_fetch_assoc($run2);
     $qry3="SELECT * From regi3 Where ID='$id'";
     $run3=mysqli_query($conn,$qry3);
     $data3=mysqli_fetch_assoc($run3);
     $qry4="SELECT * From pic Where ID='$id'";
     $run4=mysqli_query($conn,$qry4);
     $data4=mysqli_fetch_assoc($run4);
     $qry5="SELECT * From application Where ID='$id'";
     $run5=mysqli_query($conn,$qry5);
     $data5= mysqli_fetch_assoc($run5);
     $qry6="SELECT * From application2 Where ID='$id'";
     $run6=mysqli_query($conn,$qry6);
     $data6= mysqli_fetch_assoc($run6);
     $qry7="SELECT * From application3 Where ID='$id'";
     $run7=mysqli_query($conn,$qry7);
     $data7= mysqli_fetch_assoc($run7);
     $qry8="SELECT * From application4 Where ID='$id'";
     $run8=mysqli_query($conn,$qry8);
     $data8= mysqli_fetch_assoc($run8);
	
     

?>
<html>
<head>
	<title>Edit</title>
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
            <h1 align="center">EDIT <?php echo strtoupper($data1['name']);?>'s ENTRIES</h1>
            <div class="box1" style=" padding-top: 50px; padding-bottom: 20px; font-family: serif; line-height: 25px;">
                <a href='<?php echo $data4['photo']; ?>' style="float: right;">
                    <img src='<?php echo $data4['photo']; ?>' height="150" width="150" style="  border: 3px solid gray; border-radius: 5px"/><br><br>
                <input type="file" name="photo" value="<?php echo $data4['photo']; ?>">
                </a>
                
                ID : <input type="text" name="id" value=" <?php echo $id; ?>" /><br><br>
                Name : <input type="text" name="name" value=" <?php echo strtoupper($data1['name']); ?>" /><br><br>
                Father's Name : <input type="text" name="father" value=" <?php echo strtoupper($data1['father']); ?>" /><br><br>
                Mother's Name : <input type="text" name="mother" value=" <?php echo strtoupper($data1['mother']); ?>" /><br><br>
                Email : <input type="text" name="email" value=" <?php echo $data['email']; ?>" /><br><br>
                Gender : <input type="text" name="gender" value=" <?php echo $data1['gender']; ?>" /><br><br>
                Category : <input type="text" name="category" value=" <?php echo $data1['category']; ?>" /><br><br>
                Religion : <input type="text" name="religion" value=" <?php echo $data1['religion']; ?>" /><br><br>
                Date of Birth : <input type="text" name="birthdate" value=" <?php echo $data1['birthdate']; ?>" /><br><br>
                College Attended : <input type="text" name="college" value=" <?php echo $data1['college']; ?>" /><br><br>
                Board/University : <input type="text" name="university" value=" <?php echo $data1['university']; ?>" /><br><br>
                Semester : <input type="text" name="semester" value=" <?php echo $data1['semester']; ?>" /><br><br>
                Stream : <input type="text" name="stream" value=" <?php echo $data1['stream']; ?>" /><br><br>
                Honours : <input type="text" name="honours" value="<?php echo($data5['honours']); ?>">
                
            </div>

			<div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
				Village : <input type="text" name="village" value=" <?php echo $data2['village']; ?>" /><br><br>
				Post Office : <input type="text" name="postOffice" value=" <?php echo $data2['postOffice']; ?>" /><br><br>
				Pin : <input type="text" name="pin" value=" <?php echo $data2['pin']; ?>" /><br><br>
				District : <input type="text" name="district" value=" <?php echo $data2['district']; ?>" /><br><br>
				State : <input type="text" name="state" value=" <?php echo $data2['state']; ?>" /><br><br>
				Nationality : <input type="text" name="nation" value=" <?php echo $data2['nationality']; ?>" /><br><br>
			</div>
           
			<a class="title2">HSLC/Matric Details</a>
			<div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
				Institution Attended : <input type="text" name="institution" value=" <?php echo $data3['institution']; ?>" /><br><br>
				Board : <input type="text" name="board" value=" <?php echo $data3['board']; ?>" /><br><br>
				Marks Obtained : <input type="text" name="mark" value=" <?php echo $data3['mark']; ?>" /><br><br>
				Total Marks : <input type="text" name="total" value=" <?php echo $data3['total']; ?>" /><br><br>
				Percantage Obtained : <input type="text" name="percentage" value=" <?php echo $data3['percentage']; ?>" /><br><br>
			</div>
			
			<a class="title2">HS/10+2 Details</a>
			<div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
				Institution Attended : <input type="text" name="HSinstitution" value=" <?php echo $data3['HSinstitution']; ?>" /><br><br>
				Board : <input type="text" name="HSboard" value=" <?php echo $data3['HSboard']; ?>" /><br><br>
				Marks Obtained : <input type="text" name="HSmark" value=" <?php echo $data3['HSmark']; ?>" /><br><br>
				Total Marks : <input type="text" name="HStotal" value=" <?php echo $data3['HStotal']; ?>" /><br><br>
				Percantage Obtained : <input type="text" name="HSpercentage" value=" <?php echo $data3['HSpercentage']; ?>" /><br><br>
			</div>
            
            <?php
            if($data1['arrear']==0||$data1['arrear']==1||$data1['arrear']==2||$data1['arrear']==3||$data1['arrear']==4){
        ?>
			<a class="title2">Current Semester paper Details</a>
			<div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
			College Attended : <input type="text" name="college" value=" <?php echo $data6['college']; ?>" /><br><br>
			Board/University : <input type="text" name="university" value=" <?php echo $data6['university']; ?>" /><br><br>
			Semester : <input type="text" name="senester" value=" <?php echo $data6['semester']; ?>" /><br><br>
            Stream : <input type="text" name="stream" value=" <?php echo $data1['stream']; ?>" /><br><br>
            Number of Regular Papers to appear(including Practical Papers) : <br><input type="number" name="snum" value="<?php echo $data5['paper'] ?>" required><br><br>
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
                <td><input type="text" name="sub1" value="<?php echo $data6['subject1'] ?>" required /> </td>
                <td><input type="text" name="subcode1" value="<?php echo $data6['subcode1'] ?>" required /></td>
            </tr>
            
            <tr>
                <td>2.</td>
                <td><input type="text" name="sub2" value="<?php echo $data6['subject2'] ?>" required /> </td>
                <td><input type="text" name="subcode2" value="<?php echo $data6['subcode2'] ?>" required /></td>
            </tr>
            
            <tr>
                <td>3.</td>
                <td><input type="text" name="sub3" value="<?php echo $data6['subject3'] ?>" required /> </td>
                <td><input type="text" name="subcode3" value="<?php echo $data6['subcode3'] ?>" required /></td>
            </tr>
            
            <tr>
                <td>4.</td>
                <td><input type="text" name="sub4" value="<?php echo $data6['subject4'] ?>" required /> </td>
                <td><input type="text" name="subcode4" value="<?php echo $data6['subcode4'] ?>" required /></td>
            </tr>
            <?php
            if($data5['paper']==5){
            ?>
            <tr>
                <td>5.</td>
                <td><input type="text" name="sub5" value="<?php echo $data6['subject5'] ?>" required /> </td>
                <td><input type="text" name="subcode5" value="<?php echo $data6['subcode5'] ?>" required /></td>
            </tr>
            <?php
            }
            if($data5['paper']==6){
            ?>
            <tr>
                <td>6.</td>
                <td><input type="text" name="sub6" value="<?php echo $data6['subject6'] ?>" required /> </td>
                <td><input type="text" name="subcode6" value="<?php echo $data6['subcode6'] ?>" required /></td>
            </tr>
            <?php
            }
            if($data5['paper']==7){
            ?>
            <tr>
                <td>7.</td>
                <td><input type="text" name="sub7" value="<?php echo $data6['subject7'] ?>" required /> </td>
                <td><input type="text" name="subcode7" value="<?php echo $data6['subcode7'] ?>" required /></td>
            </tr>
            <?php
            }
            if($data5['paper']==8){
            ?>
            <tr>
                <td>8.</td>
                <td><input type="text" name="sub8" value="<?php echo $data6['subject8'] ?>" required /> </td>
                <td><input type="text" name="subcode8" value="<?php echo $data6['subcode8'] ?>" required /></td>
            </tr>
            <?php
            }
            if($data5['paper']==9){
            ?>
            <tr>
                <td>9.</td>
                <td><input type="text" name="sub9" value="<?php echo $data6['subject9'] ?>" required /> </td>
                <td><input type="text" name="subcode9" value="<?php echo $data6['subcode9'] ?>" required /></td>
            </tr>
            <?php
            }
            if($data5['paper']==10){
            ?>
            <tr>
                <td>10.</td>
                <td><input type="text" name="sub10" value="<?php echo $data6['subject10'] ?>" required /> </td>
                <td><input type="text" name="subcode10" value="<?php echo $data6['subcode10'] ?>" required /></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table><br><br>
                        </div>
            
			<?php
                        $datas=$data6['arrear'];
			if($datas!=0)
			{
			?>
			<a class="title2">Arrear paper Details</a>
                        <div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
                        Number of Arrear in <?php 
                                if($data1['semester']=="first"||$data1['semester']=="third"||$data1['semester']=="fifth")
                                {
                                    echo "Odd";
                                }
                                elseif ($data1['semester']=="second"||$data1['semester']=="fourth"||$data1['semester']=="sixth") {
                                    echo "Even";
                                }
                                ?> Semester: <br><input type="number" name="arrear" value="<?php echo $data6['arrear']; ?>"><br><br>
			     
			<table class="c-table">
			<thead>
				<tr>
					<th>Sl. no.</th>
					<th>Semester</th>
					<th>Subject Name</th>
					<th>Subject Code</th>
					<th>Marks obtained</th>
					<th>Total Marks</th>
				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1.</td>
					<td><input type="text" name="semester1" value="  <?php echo $data7['semester1'] ?>" /> </td>
					<td><input type="text" name="subj1" value="  <?php echo $data7['sub1'] ?>" /> </td>
					<td> <input type="text" name="sbcode1" value=" <?php echo $data7['subcode1'] ?>" /> </td>
					<td> <input type="text" name="m1" value=" <?php echo $data7['mark1'] ?>" /> </td>
					<td> <input type="text" name="t1" value=" <?php echo $data7['total1'] ?>" /> </td>
					
				</tr>
				<tr>
					<td>2.</td>
					<td> <input type="text" name="semester2" value=" <?php echo $data7['semester2'] ?>" /> </td>
					<td> <input type="text" name="subj2" value=" <?php echo $data7['sub2'] ?>" /> </td>
					<td> <input type="text" name="sbcode2" value=" <?php echo $data7['subcode2'] ?>" /> </td>
					<td> <input type="text" name="m2" value=" <?php echo $data7['mark2'] ?>" /> </td>
					<td> <input type="text" name="t2" value=" <?php echo $data7['total2'] ?>" /> </td>
					
				</tr>
				<tr>
					<td>3.</td>
					<td> <input type="text" name="semester3" value=" <?php echo $data7['semester3'] ?>" /> </td>
					<td> <input type="text" name="subj3" value=" <?php echo $data7['sub3'] ?>" /> </td>
					<td> <input type="text" name="sbcode3" value=" <?php echo $data7['subcode3'] ?>" /> </td>
					<td> <input type="text" name="m3" value=" <?php echo $data7['mark3'] ?>" /> </td>
					<td> <input type="text" name="t3" value=" <?php echo $data7['total3'] ?>" /> </td>
					
				</tr>
				<tr>
					<td>4.</td>
					<td> <input type="text" name="semester4" value=" <?php echo $data7['semester4'] ?>" /> </td>
					<td> <input type="text" name="subj4" value=" <?php echo $data7['sub4'] ?>" /> </td>
					<td> <input type="text" name="sbcode4" value=" <?php echo $data7['subcode4'] ?>" /> </td>
					<td> <input type="text" name="m4" value=" <?php echo $data7['mark4'] ?>" /> </td>
					<td> <input type="text" name="t4" value=" <?php echo $data7['total4'] ?>" /> </td>				
                </tr>
			</tbody>
			</table><br><br>
			</div>
			<?php
            }
			}
			?>
            
			<center>
			<input type="submit" name="submit" value="UPDATE" />
			</center> 
        </div>
    </div>
    </form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
        # code...
    
    	$name=$_POST['name'];
    	$fname=$_POST['father'];
    	$mname=$_POST['mother'];
        $email=$_['email'];
    	$gen=$_POST['gender'];
    	$cat=$_POST['category'];
    	$rel=$_POST['religion'];
    	$dob=$_POST['birthdate'];
        $hon=$_POST['honours'];
    	$vill=$_POST['village'];
    	$po=$_POST['postOffice'];
    	$pn=$_POST['pin'];
    	$dist=$_POST['district'];
    	$st=$_POST['state'];
    	$nat=$_POST['nation'];
    	$inst=$_POST['institution'];
    	$brd=$_POST['board'];
    	$mrk=$_POST['mark'];
    	$ttl=$_POST['total'];
    	$perc=$_POST['percentage'];
    	$inst2=$_POST['HSinstitution'];
    	$brd2=$_POST['HSboard'];
    	$mrk2=$_POST['HSmark'];
    	$ttl2=$_POST['HStotal'];
        $perc2=$_POST['HSpercentage'];
        $col=$_POST['college'];
        $univ=$_POST['university'];
        $sem=$_POST['semester'];
        $strm=$_POST['stream'];
        $paper=$_POST['paper'];
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

        $sem1=$_POST['semester1'];
        $sb1=$_POST['subj1'];
        $sbc1=$_POST['sbcode1'];
        $m1=$_POST['mark1'];
        $t1=$_POST['total1'];

        $sem2=$_POST['semester2'];
        $sb2=$_POST['subj2'];
        $sbc2=$_POST['sbcode2'];
        $m2=$_POST['mark2'];
        $t2=$_POST['total2'];

        $sem3=$_POST['semester3'];
        $sb3=$_POST['subj3'];
        $sbc3=$_POST['sbcode3'];
        $m3=$_POST['mark3'];
        $t3=$_POST['total3'];

        $sem4=$_POST['semester4'];
        $sb4=$_POST['subj4'];
        $sbc4=$_POST['sbcode4'];
        $m4=$_POST['mark4'];
        $t4=$_POST['total4'];
	
	   $q1="UPDATE regi1 SET name='$name',father='$fname',mother='$mname',gender='$gen',category='$cat',religion='$rel',birthdate='$dob',college='$col',university='$univ',semester='$sem',stream='$strm' where ID='$id'";
        $q2="UPDATE application SET college='$col',stream='$strm',honours='$hon',paper='$paper',name='$name',father='$fname',mother='$mname',gender='$gen',category='$cat',religion='$rel',birthdate='$dob',village='$vill',postOffice='$po',pin='$pn',district='$dist',state='$st',nationality='$nat' where ID='$id'";
          $q3="UPDATE regi2 SET village='$vill',postOffice='$po',pin='$pn',district='$dist',state='$st',nationality='$nat' WHERE id='$id'";
          $q4="UPDATE regi3 SET institute='$inst',board='$brd',mark='$mrk',total='$ttl',percentage='$perc',HSinstitution='$inst2',HSboard='$brd2',HSmark='$mrk2',HStotal='$ttl2',HSpercentage='$perc2' WHERE id='$id'";
          $q5="UPDATE application2 SET college='$clg',university='$univ',semester='$sem',subject1='$s1',subcode1='$sc1',
            subject2='$s2',subcode2='$sc2',subject3='$s3',subcode3='$sc3',subject4='$s4',subcode4='$sc4',subject5='$s5',subcode5='$sc5',subject6='$s6',subcode6='$sc6',
            subject7='$s7',subcode7='$sc7',subject8='$s8',subcode8='$sc8',subject9='$s9',subcode9='$sc9',subject10='$s10',subcode='$sc10',arrear='$ar' WHERE id='$id'";
        $q6="UPDATE application3 SET semester1='$sem1',sub1='$s1',subcode1='$sc1',mark1='$m1',total1='$t1',
                    semester2='$sem2',sub2='$s2',subcode2='$sc2',mark2='$m2',total2='$t2',
                    semester3='$sem3',sub3='$s3',subcode3='$sc3',mark3='$m3',total3='$t3',               
                    semester4='$sem4',sub4='$s4',subcode4='$sc4',mark4='$m4',total4='$t4' WHERE id='$id'";
        $d1= mysqli_query($conn, $q1);
        $d2= mysqli_query($conn, $q2);
        $d3= mysqli_query($conn, $q3);
        $d4=mysqli_query($conn, $q4);
        $d5=mysqli_query($conn, $q5);
        $d6=mysqli_query($conn, $q6);
        if ($d1&&$d3&&$d4) {   
            ?> 
                          <script>
                          alert('Updated Successfully');
                          window.open('details.php','_Self'); 
                          </script>
                          <?php
        }
         else
                         {
                            ?> 
                          <script>
                          alert('Data updation failed');
                          window.open('edit.php','_Self'); 
                          </script>
                          <?php 
                         }
    }
?>