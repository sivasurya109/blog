<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">

		<div class="signup-box">
			<form action="" method="post">
				<div class="form-group">
					<label class="form-label">Email ID <span class="required">*</span></label>
					<input type="email" id="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label class="form-label">Password</label>
					<input type="password" id="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label class="form-label">Confirm Password</label>
					<input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
				</div>
				<div class="btn-group">
					<button type="submit" id="signup" name="signup" class="btn btn-custom">Signup</button>
				</div>
				<br>
				<span class="or">Already Have An Account?</span>
				<a href="login.php">Login</a>
			</form>
		</div>

	</div>





	<script type="text/javascript" src="scripts/app.js"></script>

</body>
</html>

