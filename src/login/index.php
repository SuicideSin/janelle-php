<?
	session_start();
	$data = file_get_contents('users');
	$users = explode("\n", $data);

	foreach ($users as $key => $value)
	{
		$userpassword = explode(":", $value);
		if ($userpassword[0] == $_POST['username'] && $userpassword[1] == $_POST['password'])
		{
			$_SESSION['loggedin'] = true;
			break;
		}
		else
		{
			unset($_SESSION['loggedin']);
		}
	}

	header("Location: /");
