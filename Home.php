<?php
session_start();

if(isset($_SESSION['ID']) && isset(&_SESSION['user_name'])) {
	?>

	<1DOCTYPE html>
	<html>
	<head>
		<title>HOME/title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>HELLO, <?php echo $_SESSION['user_name']; ?></h1>
		<a href="logout.php">Logout</a>
	</body>
	</html>

	<?php
}
else {
	header("Location: Index.php");
	exit();
}
?>