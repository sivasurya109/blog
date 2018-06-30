<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
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
	<script type="text/javascript">
	$(document).ready(function(){		

			var validateEmail = function(elementValue) {
				var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
				return emailPattern.test(elementValue);
			}
			$('#email').keyup(function() {			
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
			$('#confirm_password').keyup(function() {
				var value = $(this).val().length;
				if (value===0) {				
					$(this).addClass('input-warning');
				} 
				else if($('#password').val()!=$(this).val()){	
					$(this).addClass('input-warning');
				}
				else{							
					$(this).removeClass('input-warning');
				}
			});
			$('#signup').click(function(e){			
				e.preventDefault();				
				var email=$("#email").val();				
				var pass=$("#password").val();  
				if(email.length!=0 && pass.length!=0)
				{ 				                      
					$.ajax({
						type:"post",
						url:"sign_up.php",
						data:"email="+email+"&pass="+pass,
						success:function(data){                           
							if( data === "1" )
							{
								alert('Signup Successful');
								$(location).attr('href','login.php');
							}								
							else
								alert('Something Went Wrong!');   
						} 
					});
				}
				else
				{
					alert("Username or Password Empty...!");
				}
			});
	});
</script>

</body>
</html>

