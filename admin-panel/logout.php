<?php
	session_start();
	// Delete certain session
	unset($_SESSION['rmg']);
	header('Location: login.php');
?>