<?php
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
  $query="SELECT * FROM register where id='$id'";
  $data= mysqli_query($conn, $query);
  $result=mysqli_fetch_assoc($data);
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
	<title>Dashboard</title>
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

        <br><br>
        
          <div class="dash"> 
          <center><h1>Welcome, <?php echo $result['name']; ?></h1></center> 
        
          <center>Your ID is : <?php echo $id; ?></center> <br>

          <center>
          <?php
              if ($data1['name']=='') {
                # code...
                ?>
                <a href="regi1.php">
                            Proceed for Registration
                        </a>
                        <?php
              }
              elseif ($data2['village']=='') {
                # code...
                ?>
                 <a href="regi2.php">
                            Proceed for Registration
                        </a>
                        <?php
              } elseif ($data3['institution']=='') {
                # code...
                ?>
                 <a href="regi3.php">
                            Proceed for Registration
                        </a>
                        <?php
              }elseif ($data4['photo']=='') {
                # code...
                ?>
                <a href="regi3.php">
                            Proceed for Registration
                        </a>
                        <?php
              } else{
                ?>
                <a>
                            Your Registration is successful.
                        </a>
                        <?php
              }
              ?>
                <br><br>
              <?php
              if ($data1['arrear']!=0||$data1['arrear']!=1||$data1['arrear']!=2||$data1['arrear']!=3||$data1['arrear']!=4) {
                if ($data5['name']=='') {
                  # code...
                  ?>
                <a href="application.php">
                            Proceed for Application Form Fillup.
                        </a>
                        <?php
                }
                elseif ($data6['college']=='') {
                  # code...
                  ?>
                <a href="application2.php">
                            Proceed for Application Form Fillup.
                        </a>
                        <?php
                }elseif ($data1['arrear']!=0&&$data7['semester1']=='') {
                  # code...
                  ?>
                <a href="application3.php">
                            Proceed for Application Form Fillup.
                        </a>
                        <?php
                }elseif ($data8['roll']=='') {
                  # code...
                  ?>
                <a href="application.php">
                            Proceed for Application Form Fillup.
                        </a>
                        <?php
                }
                else{
                  ?>
                  <a>
                            Your Registration is successful.
                        </a>
                        <?php
                }
              }else{
                ?>
                    <p style="text-align:center; color: red">As you have <?php echo $data1['arrear'] ?> Arrear in previous semsesters. You are not Eligible for Examination Form fillup.</p><br><br>
                               <p style="text-align:center; color: red">
                                    Proceed for <a class="link" href="http://localhost/web/logout.php">Logout</a>
                               </p> 
                               <?php
              }

          ?>  
          </center>    
				
           
			</div>	
            
        

        </div>
        </div>
        </form>
</body>
</html>		