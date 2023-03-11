<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
	<h1>Forgot Password</h1>
	<p>Enter your email address to reset your password.</p>
	<form action="reset_password.php" method="POST">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<button type="submit" name="submit">Reset Password</button>
	</form>
</body>
</html>
