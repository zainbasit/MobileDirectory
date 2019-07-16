
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
<input type ="Submit" name=Submit></input>
</form>
<form action ="insert.php">
<input type="Submit" value = "DataBase"></input>
</form>
</html>

<?php
    if (isset($_POST['Submit'])){
	
	//First Name
	
	if(isset($_POST['fname'])&& ($_POST['fname']) !=''){
		
		$fname=$_POST['fname'];
		
	 }
	 else{
	  $error[]='first name is missing';
	 }

	// Last Name
	if(isset($_POST['lname'])&& ($_POST['lname']) !=''){
	  $lname= $_POST['lname'];
	 }
	 else{
	  $error[]='last name is missing';
     }

	 //Email
	 if(isset($_POST['email'])&& ($_POST['email'])!=''){
	  $email= $_POST['email'];
	 }
	 else{
	  $error[]='email is missing';
	 }

	//Phone
    if(isset($_POST['phone'])&& ($_POST['phone'])!=''){
	 $phone= $_POST['phone'];
	 }
	 else{
	  $error[]='phone is missing';
	 }


	 if(isset($error) && count($error) >0 )
{
// we will see
 
foreach ($error as $value) {
	# code...
	echo $value;
	echo '<br>';
	 
 }
 
 }
// DataBase 

// Connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "mobile";
  
  
  $Fname=$_POST['fname'];
  $Lname=$_POST['lname'];
  $Email=$_POST['email'];
  $Phone=$_POST['phone'];

  $conn=mysqli_connect($servername,$username,$password,$db);
 if (!$conn) {
	 echo "Not Connected";
	 
 }
 else{
//	 echo "Connected";
 }
 //Insert Data
 
 $insert="INSERT INTO `record`(`fname`, `lname`, `email`, `phone`) VALUES ('$Fname','$Lname','$Email','$Phone')";
 
 $start=mysqli_query($conn,$insert);
 if(!$start){
	 echo "Data Not Saved";
	}
	else{
		echo "Data Saved";
	}
	
	}	
?>








  