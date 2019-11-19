<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div class="container">
	<div class="header">
		<h2>Login</h2>
	</div>
	<?php include("errors.php"); ?>
	<form action="auth.php" method="post">
		<div>
			<label>Username</label>
			<input type="text" name="username" required>
		</div>


		<div>
			<label>password</label>
			<input type="password" name="password" required>
		</div>

		
		<button type="submit" name="login_user" >Login</button>
	</form>
		<p>Not a user? <a href="registration.php"><b>Register</b></a></p>
</div>
</body>
</html>
