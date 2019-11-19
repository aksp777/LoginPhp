<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<div class="container">
	<div class="header">
		<h2>Register</h2>
	</div>
	<?php include("errors.php"); ?>
	<form action="server.php" method="post">
		
		<div>
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div>
			<label>email</label>
			<input type="email" name="email">
		</div>

		<div>
			<label>password</label>
			<input type="password" name="password_1">
		</div>

		<div>
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<button type="submit" name="reg_user" >reg</button>
		<p>Already a user? <a href="login.php"><b>Login</b></a></p>
</div>
</body>
</html>