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
		if ($_SESSION['idUserTypeFK']!=1){
			echo "Accesso non autorizzato.";
			header("Refresh: 3; url=/gtt/src/afterLogin/userServices/userServices.php");
			die();
		}	
	}	
?>