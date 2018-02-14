<?php
require_once('function.php');
session_start();

if (!is_user()) {
	redirect('signin.php');
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="css/pure-min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="container">
		<h1>Hello <?php echo $_SESSION['username'];?>!</h1>
		<p>You are now logged in!</p>

		<a href="signout.php" class="pure-button">Logout</a>

		<p>&copy <a href="http://www.w3bees.com">W3bees</a> 2013</p>
	</div>
</body>
</html>