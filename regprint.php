
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
     include('dbcon.php');
     $id=$_SESSION['user'];
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
     

     

?>

<html>
<head>
	<title>PRINT</title>
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
	<h1 align="center">REGISTRATION SUCCESSFUL</h1>
        <br><br><br>
        
        
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
            College Attended : <?php echo $data1['college']; ?><br>
            Board/University : <?php echo $data1['university']; ?><br>
            Major Subject : <?php echo $data1['honours']; ?><br>
   
            
            
        </div>
        
        
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
        
        
        
        
            
           
         <br><center><input type="submit" value="Print" onclick="window.print()" >  </center><br>  
           
        </div>

        </div>

        </form>
</body>
</html>		