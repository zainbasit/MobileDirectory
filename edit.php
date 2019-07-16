<?php
// Connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "mobile";
  
  $conn=mysqli_connect($servername,$username,$password,$db);
   
$id = $_GET['id'];

if(isset($_POST['Submit'])){
	$Fname = $_POST['fname'];
	$Lname = $_POST['lname'];
	$Email = $_POST['email'];
	$Phone = $_POST['phone'];
  
  $query="UPDATE `record` SET `fname`='$Fname',`lname`='$Lname',`email`='$Email',`phone`='$hone' WHERE id = '$id'";
  $edit = mysqli_query($conn,$query);
  
  if (!$edit)
  {
	  echo "Not UPDATE";
	  
  } 
	else {
		echo "Updated";
		header ("location:insert.php");
	}
}




?>

<html>
<form action ="" method ="POST">
First Name 
<br>
<input type ="text" name=fname value=""></input>
<br>
Last Name
<br>
<input type ="text" name=lname value=""></input>
<br>
Email
<br>
<input type ="text" name=email value=""></input>
<br>
Phone
<br>
<input type ="text" name=phone value=""></input>
<br>
<br>
<input type ="Submit" name=Submit></input><br>


</form>
</html>
