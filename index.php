<?php
	include "code.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title> multi user login Demo</title>
	<link rel="stylesheet" type="text/css"href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="css/image3.jpg">
	<div class="contain row">
		<div class="com-md-6">
			<h2 class="text-center">Login !</h2><hr/> 
			<!--<img src="css/corporate.jpg" alt="company" >-->			
			<form action="code.php" method="POST">

				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter Username">  
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter Password">
				</div>
				<p style="color:red;">
					<?php
						echo $message;
					?>
				</p>
				<div class="form-group">
					<input type="submit" name="btnLogin" class="btn btn-primary" value="Login">
				</div>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="js.jquery.min.js"></script>
	<script type="text/javascript" src="js.bootstrap.min.js"></script>
	<script type="text/javascript" src="js.popper.min.js"></script>

</body>
</html>
