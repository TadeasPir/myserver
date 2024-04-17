
<?php
require './DBC.php';


session_start();


if (empty($_SESSION["username"]))
{
	header("Location: index.php");
	exit();
}

echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet">
		<title>data</title>
	</head>
	<body>
	<header>
		<a href="index.php">Home</a>
		Logged: >' . $_SESSION["username"] . '
		
	</header>
	<p>';
$query = DBC::getConnection()->query("select username, password from Account;");
if ($query->num_rows > 0)
{
	while ($row = $query->fetch_assoc())
	{
		echo "Username:  <b>". $row["username"]. "</b>, Password: <b>" . $row["password"] . "</b><br>";
	}
}
echo '</p>
	<footer>
		Tadas.inc
	</footer>
	</body>
</html>
';

?>

