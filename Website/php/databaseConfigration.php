<?php
	    $host = 'localhost';
		$dbName = 'paperclip';
		$username = 'root';
		$password = '';
		
	
		$mysqli = new mysqli($host,$username,$password,$dbName);
	
		if ($mysqli -> connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
			exit();
		}
?>