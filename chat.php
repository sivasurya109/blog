<?php
session_start();
if(!isset($_SESSION['user']))
	header("locaion:login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="box-left">
				
			</div>			
			<div class="box-center">
				<?php
					if(isset($_SESSION['touser'])){
				?>
				<div class="chat-box w-100">
					
					<div class="msg-trans-box">	
						<div class="msg-box">
							
							<div class="msg">
								<div class="from">
									<span class="text">
										Hi
									</span>
								</div>
								<div class="clear"></div>
							</div>

							<div class="msg">
								<div class="to">
									<span class="text">Hi</span>
								</div>
							</div>

							<div class="msg">
								<div class="from">
									<span class="text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</span>
								</div>
								<div class="clear"></div>
							</div>

							<div class="msg">
								<div class="to">
									<span class="text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</span>
								</div>
								<div class="clear"></div>
							</div>

							<div class="msg">
								<div class="from">
									<span class="text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</span>
								</div>
								<div class="clear"></div>
							</div>

							<div class="msg">
								<div class="to">
									<span class="text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</span>
								</div>
								<div class="clear"></div>
							</div>

						</div>
					</div>

					<div class="msg-input">
						<div class="chat-input" id="msgInput" contenteditable="true"></div>
					</div>

				</div>
				<?php
					}
				?>				
			</div>			
			<div class="box-right">
				<div class="box-header">
					<h3>Friends List</h3>
				</div>

				<div class="friends-list">
					<div class="friend-box">
						<div class="friend-avatar">
							<img src="images/default.jpg" style="height:50px;width:50px">
						</div>
						<div class="friend-name">
							Jeyakumar M
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>

	</div>
	<script type="text/javascript" src="scripts/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="scripts/app.js"></script>
</body>
</html>