<?php
    error_reporting(E_ALL^E_NOTICE);
    $conn=mysqli_connect("localhost","root","","myweb");
	
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to Database...".mysqli_connect_error();
    }
    ?>