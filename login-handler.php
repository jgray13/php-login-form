<?php
include('includes/header.html');
function error($entry) {
	echo "Invalid $entry<br> Please <a href='login-form.php'>Log In</a>";
	exit();
}
if (isset($_POST['username'])) {
	$user = trim($_POST['username']);
	if (!ctype_alnum($user)) {
		error('Username');
	}
	if (isset($_POST['password'])) {
		$password = trim($_POST['password']);
		if (!ctype_alnum($password)) {
			error('Password');
		} else {
			header('Location: welcome.php');
		}
	}
}
include('includes/footer.html');