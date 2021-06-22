<?php
session_start();
$page_title = 'Welcome';
include 'includes/header.html';
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	echo "<h1>Welcome!</h1><br><p>Hi $username!<p>";
} else {
	echo 'Please <a href="login-form.php">Log in</a>';
}
?>
<a href="logout.php">Logout</a>

<?php
include 'includes/footer.html';
?>