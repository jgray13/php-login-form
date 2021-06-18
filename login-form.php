<?php
include('includes/header.html');
?>
		    <form action="login-handler.php" method="POST">
			<p>
			Please enter alphanumeric characters
			</p>
			<div id="form-inner">
			    <label for="name">Username: </label>
				<input type="text" name="username" id="username"><br>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password"><br>
		        <input type="submit" name="submit" value="Submit" class="submit-button">
		    </div>
<?php
include('includes/footer.html');
?>