<?
/**
 * $_POST['username'] will contain the username used to login
 * $_POST['password'] will contain the password used to login
 * Check to see if the provided username exists in the users file.
 * If the username is in the users file, make sure the provided
 * password matches the password in the file.
 *
 * Use `file_get_contents` to read the file into a string.
 * Use `explode` to split the string into parts.
 * Use `var_dump` to output a variable to your browser for debugging.
 * Use your head for the rest.
 *
 * Useful links:
 * https://secure.php.net/manual/en/funcref.php to reference PHP functions.
 * https://secure.php.net/manual/en/function.file-get-contents.php for file_get_contents
 * https://secure.php.net/manual/en/function.var-dump.php for var_dump
 * https://secure.php.net/manual/en/function.explode.php
 * https://secure.php.net/manual/en/langref.php to better understand PHP.
 */

	$data = file_get_contents('users');
	var_dump($data);
