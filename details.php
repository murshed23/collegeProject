
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
	<title>View Students detail</title>
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
	<h1 align="center">STUDENT ENTRIES</h1>
        <br><br><br>
        
        <a class="title2">General informations</a>
        <div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
        
            <a href='<?php echo $data4['photo']; ?>'>
                <img src='<?php echo $data4['photo']; ?>' height="150" width="150" style=" float: right; border: 3px solid gray; border-radius: 5px"/>
            </a>
            ID : <?php echo $id; ?><br> 
            Name : <?php echo strtoupper($data1['name']); ?><br>
            Father's Name : <?php echo strtoupper($data1['father']); ?><br>
            Mother's Name : <?php echo strtoupper($data1['mother']); ?><br>
            Email : <?php echo $data['email']; ?><br>
            Gender : <?php echo $data1['gender']; ?><br>
            Category : <?php echo $data1['category']; ?><br>
            Religion : <?php echo $data1['religion']; ?><br>
            Date of Birth : <?php echo $data1['birthdate']; ?><br>
            Current Semester : <?php echo $data1['semester']; ?><br>
            Stream : <?php echo $data1['stream']; ?><br>
            
            
        </div>
        
        <a class="title2">Address</a>
        <div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
            Village : <?php echo $data2['village']; ?><br>
            Post Office : <?php echo $data2['postOffice']; ?><br>
            Pin : <?php echo $data2['pin']; ?><br>
            District : <?php echo $data2['district']; ?><br>
            State : <?php echo $data2['state']; ?><br>
            Nationality : <?php echo $data2['nationality']; ?><br>
        </div>
        
        <a class="title2">HSLC/Matric Details</a>
        <div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
            Institution Attended : <?php echo $data3['institution']; ?><br>
            Board : <?php echo $data3['board']; ?><br>
            Marks Obtained : <?php echo $data3['mark']; ?><br>
            Total Marks : <?php echo $data3['total']; ?><br>
            Percantage Obtained : <?php echo $data3['percentage']; ?><br>
        </div>
        
        
        
        <a class="title2">HS/10+2 Details</a>
        <div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
            Institution Attended : <?php echo $data3['HSinstitution']; ?><br>
            Board : <?php echo $data3['HSboard']; ?><br>
            Marks Obtained : <?php echo $data3['HSmark']; ?><br>
            Total Marks : <?php echo $data3['HStotal']; ?><br>
            Percantage Obtained : <?php echo $data3['HSpercentage']; ?><br>
        </div>
        
        <?php
            if($data1['arrear']==0||$data1['arrear']==1||$data1['arrear']==2||$data1['arrear']==3||$data1['arrear']==4){
        ?>
        
        <a class="title2">Current Semester paper Details</a>
        <div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">
         College Attended : <?php echo $data6['college']; ?><br>
         Board/University : <?php echo $data6['university']; ?><br>
         Semester : <?php echo $data6['semester']; ?><br>
         
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
                <td> <?php echo $data6['subject1'] ?> </td>
                <td> <?php echo $data6['subcode1'] ?> </td>
            </tr>
            <tr>
                <td>2.</td>
                <td> <?php echo $data6['subject2'] ?> </td>
                <td> <?php echo $data6['subcode2'] ?> </td>
            </tr>
            <tr>
                <td>3.</td>
                <td> <?php echo $data6['subject3'] ?> </td>
                <td> <?php echo $data6['subcode3'] ?> </td>
            </tr>
            <tr>
                <td>4.</td>
                <td> <?php echo $data6['subject4'] ?> </td>
                <td> <?php echo $data6['subcode4'] ?> </td>
            </tr>
            <?php
            if($data5['paper']>=5){
            ?>
            <tr>
                <td>5.</td>
                <td> <?php echo $data6['subject5'] ?> </td>
                <td> <?php echo $data6['subcode5'] ?> </td>
            </tr>
            <?php
            }
            if($data5['paper']>=6){
            ?>
            <tr>
                <td>6.</td>
                <td> <?php echo $data6['subject6'] ?> </td>
                <td> <?php echo $data6['subcode6'] ?> </td>
            </tr>
            <?php
            }
            if($data5['paper']>=7){
            ?>
            <tr>
                <td>7.</td>
                <td> <?php echo $data6['subject7'] ?> </td>
                <td> <?php echo $data6['subcode7'] ?> </td>
            </tr>
            <?php
            }
            if($data5['paper']>=8){
            ?>
            <tr>
                <td>8.</td>
                <td> <?php echo $data6['subject8'] ?> </td>
                <td> <?php echo $data6['subcode8'] ?> </td>
            </tr>
            <?php
            }
            if($data5['paper']>=9){
            ?>
            <tr>
                <td>9.</td>
                <td> <?php echo $data6['subject9'] ?> </td>
                <td> <?php echo $data6['subcode9'] ?> </td>
            </tr>
            <?php
            }
            if($data5['paper']==10){
            ?>
            <tr>
                <td>10.</td>
                <td> <?php echo $data6['subject10'] ?> </td>
                <td> <?php echo $data6['subcode10'] ?> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table><br><br>
            
        </div>
        
        <a class="title2">Arrear paper Details</a>
        <div class="box1" style=" padding-top: 50px; padding-bottom: 50px; font-family: serif; line-height: 25px;">     
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
                <td> <?php echo $data7['semester1'] ?> </td>
                <td> <?php echo $data7['sub1'] ?> </td>
                <td> <?php echo $data7['subcode1'] ?> </td>
                <td> <?php echo $data7['mark1'] ?> </td>
                <td> <?php echo $data7['total1'] ?> </td>
                
            </tr>
            <?php
            if($data6['arrear']>=2){
            ?>
            <tr>
                <td>2.</td>
                <td> <?php echo $data7['semester2'] ?> </td>
                <td> <?php echo $data7['sub2'] ?> </td>
                <td> <?php echo $data7['subcode2'] ?> </td>
                <td> <?php echo $data7['mark2'] ?> </td>
                <td> <?php echo $data7['total2'] ?> </td>
               
            </tr>
            <?php
            }
            if($data6['arrear']>=3){
            ?>
            <tr>
                <td>3.</td>
                <td> <?php echo $data7['semester3'] ?> </td>
                <td> <?php echo $data7['sub3'] ?> </td>
                <td> <?php echo $data7['subcode3'] ?> </td>
                <td> <?php echo $data7['mark3'] ?> </td>
                <td> <?php echo $data7['total3'] ?> </td>
                
            </tr>
            <?php
            }
            if($data6['arrear']==4){
            ?>
            <tr>
                <td>4.</td>
                <td> <?php echo $data7['semester4'] ?> </td>
                <td> <?php echo $data7['sub4'] ?> </td>
                <td> <?php echo $data7['subcode4'] ?> </td>
                <td> <?php echo $data7['mark4'] ?> </td>
                <td> <?php echo $data7['total4'] ?> </td>
                           
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table><br><br>
        </div>
        
        <?php    }
                            else{
                                ?>
        <center>
            <?php
                            $n=strtoupper($data1['name']);
                            $a=$data1['arrear'];
                                
                           echo  "<font color='red', weight='bold'><br><br>**As $n have $a Arrear in previous semsesters. $n is not Eligible to Appear in this year's Examination**<br><br>";
             ?>
        </center>
        <?php
                                          
			
                            }
                        ?>
        
        <a href="http://localhost/web/delete.php?id=<?php echo $id; ?>"><input type="button" class="delete-button" value="Delete"/></a>
        <a href="http://localhost/web/edit.php?id=<?php echo $id; ?>"><input type="button" class="edit-button" value="Edit"/></a><br><br>
        </div>
        </div>
        </form>
</body>
</html>		