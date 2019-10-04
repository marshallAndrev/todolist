<?php

	session_start();

	$_SESSION['user_id'] = 1;

	$db = new PDO('mysql:dbname=wojcikmarcin_todo; host=localhost', 'wojcikmarcin_todo', 'Kozak011011!');

	if (!isset($_SESSION['user_id'])) {
		die('You are not signed in.');
	}


?>