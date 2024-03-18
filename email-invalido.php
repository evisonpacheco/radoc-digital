<?php

require 'db-connection.php';

if(isset($_POST['user_email'])){
	$email = $_POST['user_email'];
	
	$result_of_email_check = mysqli_query ($conn, "SELECT user_valid FROM registro WHERE user_email='". $email ."'");

	if ($result_of_email_check->num_rows == 1) {
		
		$result_row = $result_of_email_check->fetch_object();
		
		$user_valid = $result_row->user_valid;
		
		if($user_valid == 0){
			$delete = mysqli_query($conn, "DELETE FROM registro WHERE user_email='" . $email . "'");
			
			if ($delete){
				echo '------ CONTA EXCLUÍDA COM SUCESSO ------    A conta que havia sido cadastrada com seu e-mail no sistema RADOC foi excluída.';
			}
		} elseif($user_valid == 1) {
			echo "----- O USUÁRIO CADASTRADO JÁ CONFIRMOU TER ACESSO A ESTE E-MAIL -----    Caso o e-mail digitado seja realmente seu, 
				  mude a senha de seu e-mail para garantir sua segurança e mande uma mensagem à equipe RADOC (equiperadoc@gmail.com) para que possamos resolver este problema.";
		}
	} elseif ($result_of_email_check->num_rows == 0) {
		echo '------ SEU E-MAIL JÁ NÃO ESTÁ MAIS CADASTRADO ------    O usuário que tentou utilizar seu e-mail no sistema RADOC mudou seu endereço de e-mail cadastrado.';
	}
}

?>