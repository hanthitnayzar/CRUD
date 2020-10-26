<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container pt-5 col-4">
		<form action="regcode.php" method="POST">
			<h2>Registration Account</h2>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="firstname" placeholder="Enter firstname" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lastname" placeholder="Enter lastname" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" placeholder="Enter email" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Enter password" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Address</label>
				<input type="text" name="address" placeholder="Enter address" class="form-control" required>
			</div>

			<div class="form-group">
				<input type="submit" name="send" value="send" class="btn btn-danger">
				<input type="submit" name="send" value="send" class="btn btn-danger">
			</div>
		</form>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>