<!DOCTYPE html>
<html>
<head>
	<title> LOGIN </title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<form action= "Login.php" method="post">
		<h2>LOGIN</h2>
		<?php if(isset($_GET['error'])) { ?>
			<p class="error"> <?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label> User Name</label>
		<input type="text" name="uname" placeholder="User Name"><br>
		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>
		<h2> SELECT YOUR POST </h2>
		<input type="radio" name="Faculty"
		<?php if (isset($post) && $post=="Faculty") echo "checked";?>
		value="Faculty">Faculty<br>
		<input type="radio" name="Faculty"
		<?php if (isset($post) && $post=="Student") echo "checked";?>
		value="Faculty">Student<br><br><br>
		<button type="submit">Login</button><br><br>
	</form>
	<form action="Register.php" method="post">
		<button type="submit" class="signupbtn">Sign up</button>
	</form>
</body>
</html>