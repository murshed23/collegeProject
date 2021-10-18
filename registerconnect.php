<?php
error_reporting(E_ALL^E_NOTICE);
include('dbcon.php');

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];

if(mysqli_connect_error())
{	die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{	
        $select="select email from register where email=? limit 1";
	$query="insert into register(name,password,email) values(?,?,?)";
	$stmt=$conn->prepare($select);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum=$stmt->num_rows();
	
	if($rnum==0)
	{	$stmt->close();
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sss",$name,$password,$email);
		$stmt->execute();
		header("Location: thanks.html");
	}
	else
	{	echo"
			<script>alert('Someone already registered using this email')</script>
			<script>window.location='register.php'</script>
			";	
	}
	$stmt->close();
	$conn->close();
}
?>