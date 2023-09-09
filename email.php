<?php
	session_start();
	if($_SERVER[ 'REQUEST_METHOD' ] === 'GET' && isset($_SESSION[ 'code' ]) && isset($_SESSION[ 'email' ])) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Huzefa Dayanji" />
	<meta name="description" content="Email verification Project in XAMPP-Stack.">
	<link rel="stylesheet" type="text/css" href="style.css" crossorigin="*" />
	<link rel="icon" type="image/png" href="email-icon.png" />
	<script src="https://kit.fontawesome.com/0d1b6d31de.js" crossorigin="anonymous"></script>
	<title>Email Verification &bull; Home Page</title>
</head>
<body>
	<section class="main">
		<div class="nav">
			<div class="nav-left-area">
				<div><img src="email-icon.png" alt="Email Verification Icon"></div>
				<div>Email Verification &bull; Email Verification</div>
			</div>
		</div>
		<div class="form-area">
			<h2>Verify your email</h2>
			<p>Enter verification code we just sent to your email.</p>
			<form action="signup.php" method="POST">
				<label>Verification code</label>
				<input type="text" name="vcode" placeholder="Verification code" required>
				<input type="submit" name="verify" value="verify">
				<div class="options"><div class="divider">OR</div></div>
				<div class="social-media">
					<div><i class="fa-brands fa-instagram"></i></div>
					<div><i class="fa-brands fa-facebook"></i></div>
					<div><i class="fa-brands fa-twitter"></i></div>
				</div>
			</form>
		</div>
	</section>
</body>
</html>
<?php } else { header('Location: .'); } ?>