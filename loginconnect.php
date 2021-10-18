<?php
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($name)||!empty($password))
{	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="Myweb";
	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error())
	{	die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{	$INSERT="INSERT into login(email,password) values('$email','$password')";
		if($conn->query($INSERT))
		{	echo "New record inserted succesfully..";
		}
		else
		{	echo "Error: ".$INSERT."<br>".$conn->error;
		}
		$conn->close();
	}
}
else
{	echo "All field are required..";
	die();
}
?>