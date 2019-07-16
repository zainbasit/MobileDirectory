<table border = "">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Edit</th>
<th>Delete</th>
<?php

// Connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "mobile";
  
  $conn=mysqli_connect($servername,$username,$password,$db);
 if (!$conn) {
	 echo "Not Connected";
	 
 }
 else{
//	 echo "Connected";
 }
 
 // Selected
 
 $sql = "SELECT * FROM record";
 $result = mysqli_query($conn, $sql);
 
 if (mysqli_num_rows($result) > 0){
	 // Show data on table of each row
	 while ($row = mysqli_fetch_assoc($result)){
	?>	
		<tr> 
		<td> <?php echo $row["id"]; ?> </td>
		<td> <?php echo $row["fname"]; ?> </td>
		<td> <?php echo $row["lname"]; ?> </td>
		<td> <?php echo $row["email"]; ?> </td>
		<td> <?php echo $row["phone"]; ?> </td>
		
		<td> <a href="edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
		<td> <a href="delete.php?id=<?php echo $row["id"];?>">Delete</td>
		 </tr>
		 <?php
	 } 
 }
 
 
?>
</table>
<br>
<br>

<form action ="mobile.php">
<input type="Submit" value = "Home"></input>
</form>