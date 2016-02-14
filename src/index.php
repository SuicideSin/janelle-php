<?
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login to the Secret Website</title>
</head>
<body>

<?
	if (!isset($_SESSION['loggedin'])) // check if user not logged in
	{
?>
	<form action="login/" method="POST">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
<?
	}
	else
	{
?>
	You are logged in!
	<a href="logout/">Logout</a>
<?
	}
?>

</body>
</html>
