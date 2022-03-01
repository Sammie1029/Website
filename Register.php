<!DOCTYPE html>
<html>
<head>
	<title> LOGIN </title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<style type="text/css">
	body {
		align:center;
		text-align:center;
	}
	</style>
</head>
<body>
	<form>
		<h2>SIGN UP</h2>
		<?php if(isset($_GET['error'])) { ?>
			<p class="error"> <?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>ERP</label>
		<input type="text" name="uname" placeholder="ERP"><br><br>
		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br><br>
		<label>Re-Password</label>
		<input type="password" name="password" placeholder="Re-Password"><br><br>
		<h2> SELECT YOUR POST </h2>
		<input type="radio" name="Faculty"
		<?php if (isset($post) && $post=="Faculty") echo "checked";?>
		value="Faculty">Faculty<br>
		<input type="radio" name="Faculty"
		<?php if (isset($post) && $post=="Student") echo "checked";?>
		value="Faculty">Student<br><br><br>
		<button type="submit">Sign up</button>
	</form>
</body>
</html>