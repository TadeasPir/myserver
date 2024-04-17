<?php

session_start();



echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./style.css">
		<title>LandingPG</title>
	</head>
	<body>
		<header>
			<a href="register.php">Register</a>
			<a href="login.php">Log In</a>';
if (!empty($_SESSION["username"]))
{
	echo '<a href="data.php">Data</a>
	Logged in as <b>' . $_SESSION["username"] . '</b>0
	';
}
echo '
		</header>
		<p>
			Hallo everymeow, we store your login in database.
		</p>
		<footer>
			Tadas.inc
		</footer>
	</body>
</html>
';
