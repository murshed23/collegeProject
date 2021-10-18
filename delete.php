<?php

include 'dbcon.php';
$id=$_GET['id'];

$sql = "DELETE FROM register WHERE id='$id'";


$sql = "DELETE FROM regi1 WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Record</title>
</head>
<body>
<br>
<br>
<a href="admindash.php">Return to Dashboard</a>
</body>
</html>