<?php
		// configuration settings
	$db_hostname = '127.0.0.1';
	$db_database = 'filamu254';
	$db_username = 'root';
	$db_password = 'Xcial519'; // change login password


	// configs
	$config_web_name = 'Filamu254';
	$config_base_dir = "http://127.0.0.1/choir/";

	$connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
				  if($connection->connect_error) die($connection->connect_error);
?>