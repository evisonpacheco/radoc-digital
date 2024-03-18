<?php

require 'db-connection.php';
session_start();

$email_mudar = $_POST['email_enviado'];
$matricula_online = $_SESSION['user_registration'];

$result_of_email_check = mysqli_query ($conn, "SELECT user_registration FROM registro WHERE user_email='". $email_mudar ."'");

if ($result_of_email_check->num_rows == 1) {

	$result_row = $result_of_email_check->fetch_object();
	
	$matricula_email = $result_row->user_registration;
	
	if (strcasecmp($matricula_online, $matricula_email) != 0) {
		echo "               Este e-mail já está cadastrado.";
		header("Refresh: 4; url=pages/editar-dados.php");
		exit();
	} elseif (strcasecmp($matricula_online, $matricula_email) == 0) {
		echo "               Este e-mail já está cadastrado em sua conta.";
		header("Refresh: 4; url=pages/editar-dados.php");
		exit();
	}
} elseif ($result_of_email_check->num_rows == 0) {
		$update = mysqli_query($conn, "UPDATE registro 
									   SET user_email ='". $email_mudar ."' 
									   WHERE user_registration ='" . $matricula_online . "'");
		if($update){
			mysqli_query($conn, "UPDATE registro 
								 SET user_valid = 0 
								 WHERE user_registration ='" . $matricula_online . "'");
			$_SESSION['user_valid'] = 0;
								 
			echo "----- E-MAIL ATUALIZADO COM SUCESSO -----     
				  Valide seu novo e-mail para desbloquear as funções do sistema RADOC em sua conta.";							   
			header("Refresh: 6; url=pages/editar-dados.php");
			exit();
		} else {
			echo "----- ERRO AO ATUALIZAR E-MAIL -----     
				  Tente novamente.";							   
			header("Refresh: 6; url=pages/editar-dados.php");
			exit();
		}
}

?>