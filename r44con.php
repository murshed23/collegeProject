<?php
include('dbcon.php');
if(isset($_POST['submit']))
{  
    $pName=$_FILES["photo"]["name"];
    $pTemp=$_FILES["photo"]["tmp_name"];

    $pfolder="photo/".$pName;
    move_uploaded_file($pTemp, $pfolder);
    
        $query="INSERT INTO pic VALUES ('$pfolder')";
        $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			echo "Data Updated Successfully.";
        }
   

}
?>