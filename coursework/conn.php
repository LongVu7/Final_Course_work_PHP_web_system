<?php
	$db_username = 'root';
	$db_password = '';
	$conn = new PDO('mysql:host=localhost;dbname=final_coursework', $db_username, $db_password );
	if(!$conn){
		die("Connection Failed!");
	}



