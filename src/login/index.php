<?
/**
 * Ensure the session has started in every PHP file.
 * If the username and password check out create a variable set to true in the $_SESSION superglobal.
 * If the username and password do not checkout unset the variable in the $_SESSION superglobal.
 *
 * In src/index.php, only output the form if $_SESSION['loggedin'] is not set.
 * Otherwise, just output "You are logged in."
 */

	$data = file_get_contents('users');
	$users = explode("\n", $data);
	$loggedin = false;

	foreach ($users as $key => $value)
	{
		$userpassword = explode(":", $value);
		if ($userpassword[0] == $_POST['username'] && $userpassword[1] == $_POST['password'])
		{
			$loggedin = true;
			break;
		}
	}

	if ($loggedin)
	{
		echo "Welcome!";
	}
	else
	{
		echo "Wrong username or password.";
	}
