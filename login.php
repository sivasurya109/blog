<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">

		<div class="login-box">
			<form action="" method="post">
				<div class="form-group">
					<label class="form-label">Username</label>
					<input type="text" id="username" name="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label class="form-label">Password</label>
					<input type="password" id="password" name="password" class="form-control" required>
				</div>
				<div class="btn-group">
					<button type="submit" id="login" name="login" class="btn btn-custom">Login</button>
				</div>
				<br>
				<div>
					<span class="or"> Create A New Account? </span>
					<a href="signup.php">Signup</a><br><br>
				</div>
				<a href="forget_password.php">Forget Password?</a>
			</form>
		</div>

	</div>
</body>
</html>

