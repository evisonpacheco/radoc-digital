<?php

require 'db-connection.php';

if(isset($_POST['user_registration'])){
	$matricula = $_POST['user_registration'];
	
	$result_of_registration_check = mysqli_query ($conn, "SELECT user_valid FROM registro WHERE user_registration='". $matricula ."'");

	if ($result_of_registration_check->num_rows == 1) {

		$update_email = mysqli_query($conn, "UPDATE registro SET user_valid = 1 WHERE user_registration='" . $matricula . "'");
		
		if ($update_email){
			echo '------ E-MAIL CONFIRMADO ------';
			echo ' ';
			echo 'As funcionalidades do sistema RADOC agora estão desbloqueadas em sua conta!';
			header("Refresh: 5; url=index.html");
			exit();
		}
	} else {
		echo '------ ERRO AO CONFIRMAR E-MAIL ------';
			echo ' ';
			echo 'A matrícula digitada não corresponde à que está registrada em sua conta. Tente novamente!';
			header("Refresh: 5; url=validar-email.html");
			exit();
	}
}

?>