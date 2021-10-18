<?php
	error_reporting(E_ALL^E_NOTICE);
	include('dbcon.php');
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$gender=$_POST['gender'];
	$qry="INSERT INTO regi1 VALUES('$name','$fname','$mname','$gender')";
	if(mysqli_query($conn,$qry)){	
				?>
			<script>
			alert('Data Updated Successfully.');
			window.open('regthanks.html','_Self'); 
			</script>
		<?php
    }
    else{
        ?> 
			<script>
			alert('Data Updated Successfully.');
			window.open('registration.php','_Self'); 
			</script>
        <?php
    }
?>