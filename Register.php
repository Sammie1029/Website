<!DOCTYPE html>
<html>
<head>
	<title> LOGIN </title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<form>
		<h2>Sign up</h2>
		<?php if(isset($_GET['error'])) { ?>
			<p class="error"> <?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>ERP</label>
		<input type="text" name="uname" placeholder="ERP"><br>
		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>
		<label>Re-Password</label>
		<input type="password" name="password" placeholder="Re-Password"><br><br>
		<button type="submit">Sign up</button>
	</form>
</body>
</html>