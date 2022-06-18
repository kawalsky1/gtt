<?php
	// distruzione sessione corrente
	session_start();
	session_unset();
	session_destroy();
	$_SESSION = array();
	header("Location: /gtt/index.php");
?>