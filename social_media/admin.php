<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin page </title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
	<h2> admin Registration page</h2>
</div>
<form method="post" action="admin.php">

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" >
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" >
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>

	</div>
	<p>
		Already an admin? <a href="login.php">Sign in</a>
	</p>
	<?php include("functions.php"); ?>
</form>
</body>
</html>