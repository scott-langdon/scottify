<?php  

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText); // removes any html elements so no one can manipulate site
	$inputText = str_replace(" ", "", $inputText); // this will replace all the spaces to clean it up
	return $inputText
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText
}

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText
}

if(isset($_POST['loginButton'])) {
	//Login button was pressed
}

if(isset($_POST['registerButton'])) {
	//Register button was pressed
	$username = sanitizeFormUsername($_POST['username']);

	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);

	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

}

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