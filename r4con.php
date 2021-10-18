<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
    $pName=$_FILES["photo"]["name"];
    $pTemp=$_FILES["photo"]["tmp_name"];
    $sName=$_FILES["sign"]["name"];
    $sTemp=$_FILES["sign"]["tmp_name"];

    $pfolder="photo/".$pName;
    $sfolder="sign/".$sName;
    move_uploaded_file($pTemp, $pfolder);
    move_uploaded_file($sTemp, $sfolder);
    
    if ($pName!=''&&$sName!='')
    {
        $query="INSERT INTO pic VALUES ('$pfolder','$sfolder')";
        $data= mysqli_query($conn, $query);
        
        if($data)
        {   
			echo "Data Updated Successfully.";
        }
    }
    else
    {   echo "All fields are required";
			
    }

}
?>
Upload Signature :<input type="file" name="sign" required><br><br>