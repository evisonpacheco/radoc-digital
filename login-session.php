<?php

require 'db-connection.php';

session_start();

if (!empty($_POST['user_email']) && !empty($_POST['user_password'])) {
			
	$email = $_POST['user_email'];
	$senha = $_POST['user_password'];

	$result_of_login_check = mysqli_query($conn, "SELECT user_name, user_registration, user_password
								      FROM registro 
								      WHERE user_email = '" . $email . "' ");
				
	if ($result_of_login_check->num_rows == 1) {

		$result_row = $result_of_login_check->fetch_object();
	
		if (password_verify($senha, $result_row->user_password)) {
		
			$_SESSION['user_name'] = $result_row->user_name;
			$_SESSION['user_registration'] = $result_row->user_registration;
			header("Location: pages/home.html");
			exit();
						
			} else {
				echo "<script type='text/javascript'>
					alert('Senha incorreta.');
					window.location.replace('index.html');
					</script>";
				  }
			} else {
				echo "<script type='text/javascript'>
					alert('Usuário incorreto ou não cadastrado.');
					window.location.replace('index.html');
					</script>";
				}
		  }

?>
