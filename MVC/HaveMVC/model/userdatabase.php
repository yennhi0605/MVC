<?php
	require 'database.php';
	require 'user.php';

	function login($username, $password){
		global $db;
		$sql = "SELECT * FROM User WHERE username = '$username' and password = '$password'";
		$result = $db->query($sql)->fetch_all();
	 
		if (count($result) > 0) {
			$user = new User();
			$user->fullName = $result[0][1];
			return $user;
		}
		return null;
	}	
?>