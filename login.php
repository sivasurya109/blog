<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="scripts/jquery-2.1.4.min.js"></script>
	<style type="text/css">
		.input-warning{
			border: 2px solid #d44141;
		}
		.input-warning:focus {
			outline: none;
			box-shadow: 0 0 2px 0 #d44141;
		}
	</style>
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
<script type="text/javascript">
	$(document).ready(function(){		

			var validateEmail = function(elementValue) {
				var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
				return emailPattern.test(elementValue);
			}
			$('#username').keyup(function() {
				var value = $(this).val();
				var valid = validateEmail(value);

				if (!valid) {
				$(this).css('color', '#d44141');
				$(this).addClass('input-warning');
				} else {
				$(this).css('color', '#000');
				$(this).removeClass('input-warning');
				}
			});
			$('#password').keyup(function() {
				var value = $(this).val().length;
				if (value===0) {				
				$(this).addClass('input-warning');
				} else {				
				$(this).removeClass('input-warning');
				}
			});
			$('#login').click(function(){
				var uname=$("#username").val();
				alert(uname);
				var pass=$("#password").val();  
				if(uname.length!=0 && pass.length!=0)
				{
					alert(pass);                       
					$.ajax({
						type:"post",
						url:"login_check.php",
						data:"uname="+uname+"&pass="+pass,
						success:function(data){                           
							alert("login_successfully");			                                
						} 
					});
				} 				
			});
	});
</script>
</html>

