<?php

session_start();

if(!isset($_SESSION["user_email"])) {
	header("Location: ../index.html");
	exit;
} elseif($_SESSION['user_valid'] == 0) {
	header("Location: editar-dados.php");
	exit;
}

?>
