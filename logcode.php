<?php 
include 'confs/config.php';
$email=$password=$address='';

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM login WHERE email='$email' AND password='$password' ";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		$id=$row["id"];
		$email=$row["email"];
		session_start();
		$_SESSION['id']=$id;
		$_SESSION['email']=$email;
	}
	echo "<script>window.open('welcome.php','_self')</script>";
}
else{
	echo "Invalid Email or Password";
}
 ?>
