<?php
	$dsn = 'mysql:host=sql.njit.edu;dbname=eo65';
	$username = 'eo65';
	$password = 'SECRETXXXX';

	try
	{
		$db = new PDO($dsn, $username, $password);
	}
	
	catch (PDOException $e)
	{
		$error_message = $e->getMessage();
    	echo $error_message;
    	exit();
	}
?>