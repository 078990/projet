<?php 	
include 'connect.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$insert=mysqli_query($con,"INSERT into request values ('','$name','$phone','$email','$message')");
if ($insert==true) {
	// code...
	echo "correct";
}
else{
	echo "faild";
}

 ?>