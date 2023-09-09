<?php
	session_start();
	include 'config.php';
	include 'function.php';
	if($_SERVER[ 'REQUEST_METHOD' ] === 'POST' && isset($_POST[ 'submit' ])) {

		$verifiedEmail = 0; // false
		$id = rand(1000, 3000);
		$email = mysqli_real_escape_string($conn, trim($_POST[ 'email' ]));
		$pass = mysqli_real_escape_string($conn, trim($_POST[ 'pass' ]));
		$login_time = showTimeStamp();

		if(empty($email) || empty($pass))
			die('<script>window.alert("Please enter all details."); window.location = ".";</script>');

		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			die('<script>window.alert("Email is invalid."); window.location = ".";</script>');

		if(strlen($pass) < 6)
			die('<script>window.alert("Please choose a strong password (6 characters long)."); window.location = ".";</script>');

		$_SESSION[ 'code' ] = rand(100000, 150000);
		$_SESSION[ 'email' ] = $email;
		$temp_code = $_SESSION[ 'code' ];

		if($verifiedEmail === 0) {
			$from_name = "9309 Huzefa Dayanji";
			$from = "217dayanjihuzefa@gmail.com";
			$to = $email;
			$subject = "Verify your email address.";

			$message = "
			<html>
				<head><title></title></head>
				<body>
					<p>The verification code for your email : {$temp_code}</p>
					<b><font>Please do not share this code with anyone else.</font></b>
				</body>
			</html>
			";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// Additional mail name headers
			$headers .= "From: $from_name <$from>" . "\r\n";
			$headers .= "CC: $from";

			if(mail($to,$subject,$message,$headers) 
				&& isset($_SESSION[ 'code' ])
				&& isset($_SESSION[ 'email' ])
			){
				$insrtQuery = "INSERT INTO `users`(`user_email`, `user_pass`, `user_logs`, `verified`) VALUES ('{$email}','{$pass}','{$login_time}', 0)";
				$execquery = mysqli_query($conn, $insrtQuery);
				header('Location: email.php');
			}else{
				echo '<script>window.alert("There was a problem verifying your email. Try again later"); window.location = "."; </script>';
			}
		}

	} else if($_SERVER[ 'REQUEST_METHOD' ] === 'POST' && isset($_POST[ 'verify' ])) {
		$emailCode = intval($_POST[ 'vcode' ]);
		if($emailCode === $_SESSION[ 'code' ]) {
			$updateQuery = "UPDATE `users` SET `verified`='1' WHERE user_email='{$_SESSION[ "email" ]}'";
			$execquery = mysqli_query($conn, $updateQuery);
			if($execquery) {
				echo '<script>window.alert("Email has been verified.");window.location = "."; </script>';
				session_unset();
				session_destroy();
			}
		} else {
			echo '<script>window.alert("Invalid verification code. Please try again."); window.location = "email.php"; </script>';
		}
	}
	mysqli_close($conn);
?>