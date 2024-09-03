<?php 	

include 'connect.php';

$username=$_POST['username'];
$password=$_POST['password'];
$insert=mysqli_query($con,"INSERT into admin values('','$username','$password')");
if ($insert==true) {
	// code...
	echo "correct";
}
else{
	echo "faild";
}


 ?>