<?php 
include 'confs/config.php';
$firstname=$lastname=$email=$password='';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$sql="INSERT INTO login (firstname,lastname,email,password,address) VALUES ('$firstname','$lastname','$email','$password','$address')";
$result=mysqli_query($conn,$sql);
if ($result) {
	echo "<script>window.open('login.php','_self')</script>";
}else{
	echo "Error registration.";
 
}
?>
