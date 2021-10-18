<?php
include 'dbcon.php';



?>

<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="post" action="">
	<div class="box">
	<center><img src="kc.png" width="100px" alt=""></center>
	<?php
		include('navbar2.html');
	?>

	<div class="inner-box" style="padding:40px;">
	
     <h1 align="center">STUDENT ENTRIES</h1>
        <br><br><br> 
	<h2>SEARCH BY CATEGORY:</h2>
		Semester: <select id="semester" name="semester">
        <option value="first">1st Semester</option>
		<option value="second">2nd Semester</option>
		<option value="third">3rd Semester</option>
		<option value="fourth">4th Semester</option>
		<option value="fifth">5th Semester</option>
		<option value="sixth">6th Semester</option>
		</select><br><br>
		Stream: <select id="semester" name="stream">
        <option value="science">Science</option>
		<option value="commerce">Commerce</option>
		<option value="arts">Arts</option>
		</select><br><br>
		
	 
	<input type="submit" name="category" value="Search" /></a><br><br><br>
	<?php
	if (isset($_POST['category'])) {
		$sem=$_POST['semester'];
		$strm=$_POST['stream'];
		$qry="SELECT * FROM regi1 WHERE semester='$sem' AND stream='$strm'";
		$data=mysqli_query($conn,$qry);
        ?>
            <table class="c-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                
                
		<th>Student Details</th>
            </tr>
        </thead>
        
        
        
        <?php      
		while($result= mysqli_fetch_assoc($data))
        {   ?>
            <tbody>
				<tr><td><?php echo $result['id']; ?></td>
				<td><?php echo $result['name']; ?> </td>
             
                
                <td><a href="http://localhost/web/details.php?id=<?php echo $result['id']; ?>">Click to view</a></td></tr>
			</tbody>
            <?php 
		}
        ?> 
               
        </table>
        <br><br>
		<?php } ?>
	
	
	
	<h2>OR</h2>
	<input type="submit" class="edit-button" name="submit" value="SHOW ALL" style="float:left"/></a><br><br><br>

	<?php
	if (isset($_POST['submit'])) {
		;
		$qry="SELECT * FROM register";
		$data=mysqli_query($conn,$qry);
        ?>
            <table class="c-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                
                
		<th>Student Details</th>
            </tr>
        </thead>
        
        
        
        <?php      
		while($result= mysqli_fetch_assoc($data))
        {   ?>
            <tbody>
				<tr><td><?php echo $result['id']; ?></td>
				<td><?php echo $result['name']; ?> </td>
             
                
                <td><a href="http://localhost/web/details.php?id=<?php echo $result['id']; ?>">Click to view</a></td></tr>
			</tbody>
            <?php 
		}
        ?> 
               
        </table>
        <br><br>
		<?php } ?>
		
        
        

        </div>
        </div>
        </form>
</body>
</html>	