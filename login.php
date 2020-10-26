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
	<div class="container pt-5 col-4">
		<form action="logcode.php" method="POST">
			<h2>Login Form</h2>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" placeholder="Enter email" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Passsword</label>
				<input type="password" name="password" placeholder="Enter password" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-danger">
				<input type="submit" name="submit" class="btn btn-danger">
			</div>
		</form>
	</div>
</body>
</html>