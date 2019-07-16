<?php
// Connection

$servername = "localhost";
$username = "root";
$password = "";
$db = "mobile";
  
  $conn=mysqli_connect($servername,$username,$password,$db);
  
   
$id = $_GET['id'];

$query="DELETE FROM `record` WHERE id = '$id'";

$del = mysqli_query($conn,$query);
if (!$del){
	echo "Data Not Delete";
}
else{
//	echo "Data Deleted";
	header("location:insert.php");
}






?>
