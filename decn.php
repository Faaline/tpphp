<?php
// On active les sessions :
	session_start();
 
// On detruit les sessions :
	unset($_SESSION['login'], $_SESSION['password']);
 
// On redirige le visiteur vers la page désirée :
	header('Location: ./form8.php');
	exit();
?>