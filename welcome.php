<?php 
session_start();
include 'confs/config.php';

$id=$_SESSION['id'];
$firstname=$lastname=$email='';
$sql="SELECT * FROM login WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		$firstname=$row['firstname'];
		$lastname=$row['lastname'];
		$email=$row['email'];

	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="login.php" method="POST">
			<h2>Welcome Guys.<?php echo $firstname."".$lastname; ?></h2>
		</form>
	</div>
</body>
</html>