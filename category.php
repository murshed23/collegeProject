<?php
include 'dbcon.php';
$sem=$_GET['sem'];
$strm=$_GET['strm'];
$query="SELECT * FROM regi1 where semester='$sem' and stream='$strm'";
$data= mysqli_query($conn, $query);

?>
<script>
			function table(){
        
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
		}
		</script>		