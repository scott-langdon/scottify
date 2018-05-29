<?php  
	include("includes/classes/Account.php");

	$account = new Account();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Scottify</title>
</head>
<body>
	<h1>Welcome to Scottify</h1>
	<div id="inputContainer">

		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" type="text" name="loginUsername" placeholder="e.g. jackSparrow" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" type="password" name="loginPassword" placeholder="Your Password" required>
			</p>
			<button type="submit" name="loginButton">LOG IN</button>
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<label for="username">Username</label>
				<input id="username" type="text" name="username" placeholder="e.g. jackSparrow" required>
			</p>
			<p>
				<label for="firstName">First Name</label>
				<input id="firstName" name="firstName" type="text" placeholder="e.g. Jack" required>
			</p>
			<p>
				<label for="lasttName">Last Name</label>
				<input id="lastName" name="lastName" type="text" placeholder="e.g. Sparrow" required>
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="e.g. jacksparrow1@gmail.com" required>
			</p>
			<p>
				<label for="email2">Confirm Email</label>
				<input id="email2" name="email2" type="email" placeholder="e.g. jacksparrow1@gmail.com" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your Password" required>
			</p>
			<p>
				<label for="password2">Confirm Password</label>
				<input id="password2" name="password2" type="password" placeholder="Confirm Password" required>
			</p>

			<button type="submit" name="registerButton">SIGN UP</button>
		</form>

	</div>
</body>
</html>