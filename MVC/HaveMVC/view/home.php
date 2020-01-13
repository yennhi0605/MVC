<?php
	require '../model/user.php';
	session_start();
	$user = null;
	if (isset($_SESSION["isLogin"])) {
		if ($_SESSION["isLogin"] == true) {
			$user= new User();
			$user->fullName = $_SESSION["fullName"];
		}
	}
?>

<body>
	<?php
		if ($user == null) {
	?>
		<button>Login</button>
	<?php
		}else{
	?>
		<h1>Hello <?php echo $user->fullName; ?></h1>
		<?php
		}?>
</body>
