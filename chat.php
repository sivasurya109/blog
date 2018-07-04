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
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	
</head>
<body>
	<div class="container">
		<div class="row">
<<<<<<< HEAD
			<!-- <div class="box-left">				
			</div> -->
			<div class="box-center ball">
				<div class="chat-box ba w-100">
					<div class="msg-trans-box" >	
						<div class="msg-box chat-background">
=======
			<div class="box-left">
				
			</div>			
			<div class="box-center">
				<?php
					if(isset($_SESSION['touser'])){
				?>
				<div class="chat-box w-100">
					
					<div class="msg-trans-box">	
						<div class="msg-box">
>>>>>>> 2ea44546de4768e1f7f57323830b12e500ce6ec5
							
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
<<<<<<< HEAD
					<div class="msg-input" style="height:50px">
						<div class="chat-input" id="msgInput" contenteditable="true"></div>
						<div class="chat-submit">
						<button class="btn btn-custom btn-chat" type="button" id="msgSend">Send</button>
						</div>

					</div>

				</div>
			</div>
			<!-- <div class="box-right">
				
			</div> -->
=======

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
>>>>>>> 2ea44546de4768e1f7f57323830b12e500ce6ec5
			<div class="clear"></div>
		</div>

	</div>
<<<<<<< HEAD
	<script type="text/javascript" src="scripts/jquery-2.1.4.min.js"></script>	
=======
	<script type="text/javascript" src="scripts/jquery-2.1.4.min.js"></script>
>>>>>>> 2ea44546de4768e1f7f57323830b12e500ce6ec5
	<script type="text/javascript" src="scripts/app.js"></script>
</body>
</html>