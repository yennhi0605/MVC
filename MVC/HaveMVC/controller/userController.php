<?php
	session_start();

	require '../model/userdatabase.php';

	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$user = login($username, $password);
		if ($user == null) {
			$_SESSION["isLogin"] = false;
		}else{
			$_SESSION["isLogin"] = true;
			$_SESSION["fullName"] = $user->fullName;
		}
		header("location: ../view/home.php");
		// echo json_encode($user);
	}
?>