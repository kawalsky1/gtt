<?php
	session_start();
	if (!isset($_SESSION['start_time'])){
		echo "Effettuare il login per accedere.";
		header("Refresh: 3; url=/gtt/src/login/login.php");
		die();
	}
    else {
		$now = time();
		$a = $_SESSION['start_time'];
		$time = $now-$a;
		// 1h
		if ($time > 3600) {
			header('/gtt/src/logout/logout.php');
			die();
		}
		if (!isset($_SESSION['idUserTypeFK'])){
			echo "Necessaria autenticazione, effettua il login o registrati per accedere a questi contenuti.";
			header("Refresh: 3; url=/gtt/src/login/login.php");
			die();
		}	
	}	
?>