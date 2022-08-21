<?php
	session_start();
	unset($_SESSION["user_logged_in"]);
	session_destroy();
	header("Location: login.php");
?>
