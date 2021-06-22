<?php
session_start();
$page_title = 'Login';
$username = '';
$password = '';
$username_error = '';
$password_error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['username'])) {
		$username = trim($_POST['username']);
		if (!ctype_alnum($username)) {
			$username_error = 'Invalid username';
		}
	}
	if (empty ($_POST['username'])) {
		$username_error = 'Please enter a username';
	}
	if (isset($_POST['password'])) {
		$password = trim($_POST['password']);
		if (!ctype_alnum($password)) {
			$password_error = 'Invalid password';
		}
	}
	if (empty($_POST['password'])) {
		$password_error = 'Please enter a password';
	} else {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
	    header('Location: welcome.php');	
	}
}
include 'includes/header.html';
?>
		    <form action="" method="POST">
			    <h1>Login</h1>
			    <div id="form-inner">
			        <fieldset>
			            <legend>Please enter alphanumeric characters</legend>
			            <label for="name">Username: </label>
				        <input type="text" name="username" id="username" value="<?php if (isset($_POST['username'])) echo $_POST['username'];?>">
				        <p class="error-message"><?php if (!empty($username_error)) echo $username_error;?></p>
				
				        <br><label for="password">Password: </label>
				        <input type="password" name="password" id="password">
				        <p class="error-message"><?php if (!empty($password_error)) echo $password_error;?></p>
				
		                <br><input type="submit" name="submit" value="Submit" class="submit-button">
		    
			        </fieldset>
			    </div>
			</form>
<?php
include 'includes/footer.html';
?>